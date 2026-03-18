<?php

namespace think\swoole\concerns;

use Swoole\Coroutine;
use Swoole\Coroutine\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Http\Status;
use think\App;
use think\Cookie;
use think\Event;
use think\exception\Handle;
use think\helper\Arr;
use think\helper\Str;
use think\Http;
use think\swoole\App as SwooleApp;
use think\swoole\Http as SwooleHttp;
use think\swoole\response\File as FileResponse;
use think\swoole\response\Iterator as IteratorResponse;
use Throwable;
use function substr;

/**
 * Trait InteractsWithHttp
 * @package think\swoole\concerns
 * @property App $app
 * @property App $container
 */
trait InteractsWithHttp
{
    use InteractsWithWebsocket, ModifyProperty;

    public function createHttpServer()
    {
        $this->preloadHttp();

        $host    = $this->getConfig('http.host');
        $port    = $this->getConfig('http.port');
        $options = $this->getConfig('http.options', []);

        $server = new Server($host, $port, false, true);
        $server->set($options);

        $server->handle('/', function (Request $req, Response $res) {
            if ($this->wsEnable && $this->isWebsocketRequest($req)) {
                $this->onHandShake($req, $res);
            } else {
                $this->onRequest($req, $res);
            }
        });

        $server->start();
    }

    protected function preloadHttp()
    {
        $http = $this->app->http;
        $this->app->invokeMethod([$http, 'loadMiddleware'], [], true);

        if ($this->app->config->get('app.with_route', true)) {
            $this->app->invokeMethod([$http, 'loadRoutes'], [], true);
            $route = clone $this->app->route;
            unset($this->app->route);

            $this->app->resolving(SwooleHttp::class, function ($http, App $app) use ($route) {
                $newRoute = clone $route;
                $this->modifyProperty($newRoute, $app);
                $app->instance('route', $newRoute);
            });
        }

        $middleware = clone $this->app->middleware;
        unset($this->app->middleware);

        $this->app->resolving(SwooleHttp::class, function ($http, App $app) use ($middleware) {
            $newMiddleware = clone $middleware;
            $this->modifyProperty($newMiddleware, $app);
            $app->instance('middleware', $newMiddleware);
        });

        unset($this->app->http);
        $this->app->bind(Http::class, SwooleHttp::class);
    }

    protected function isWebsocketRequest(Request $req)
    {
        $header = $req->header;
        return strcasecmp(Arr::get($header, 'connection', ''), 'upgrade') === 0 &&
            strcasecmp(Arr::get($header, 'upgrade', ''), 'websocket') === 0;
    }

    protected function prepareHttp()
    {
        if ($this->getConfig('http.enable', true)) {

            $this->wsEnable = $this->getConfig('websocket.enable', false);

            if ($this->wsEnable) {
                $this->prepareWebsocket();
            }

            $workerNum = $this->getConfig('http.worker_num', swoole_cpu_num());

            $this->addBatchWorker($workerNum, [$this, 'createHttpServer'], 'http server');
        }
    }

    /**
     * "onRequest" listener.
     *
     * @param Request $req
     * @param Response $res
     */
    public function onRequest($req, $res)
    {
        Coroutine::create(function () use ($req, $res) {
            $this->runInSandbox(function (Http $http, Event $event, SwooleApp $app) use ($req, $res) {

                $app->setInConsole(false);

                $request = $this->prepareRequest($req);

                try {
                    $response = $this->handleRequest($http, $request);
                } catch (Throwable $e) {
                    $handle = $this->app->make(Handle::class);
                    $handle->report($e);
                    $response = $handle->render($request, $e);
                }

                $this->setCookie($res, $app->cookie);
                $this->sendResponse($res, $request, $response);
            });
        });
    }

    protected function handleRequest(Http $http, $request)
    {
        $level = ob_get_level();
        ob_start();

        $response = $http->run($request);

        $content = $response->getContent();

        if (ob_get_level() == 0) {
            ob_start();
        }

        $http->end($response);

        if (ob_get_length() > 0) {
            $response->content(ob_get_contents() . $content);
        }

        while (ob_get_level() > $level) {
            ob_end_clean();
        }

        return $response;
    }

    protected function prepareRequest(Request $req)
    {
        $header = $req->header ?: [];
        $server = $req->server ?: [];

        foreach ($header as $key => $value) {
            $server['http_' . str_replace('-', '_', $key)] = $value;
        }

        // 重新实例化请求对象 处理swoole请求数据
        /** @var \think\Request $request */
        $request = $this->app->make('request', [], true);

        return $request
            ->withHeader($header)
            ->withServer($server)
            ->withGet($req->get ?: [])
            ->withPost($req->post ?: [])
            ->withCookie($req->cookie ?: [])
            ->withFiles($this->getFiles($req))
            ->withInput($req->rawContent())
            ->setBaseUrl($req->server['request_uri'])
            ->setUrl($req->server['request_uri'] . (!empty($req->server['query_string']) ? '?' . $req->server['query_string'] : ''))
            ->setPathinfo(ltrim($req->server['path_info'], '/'));
    }

    protected function getFiles(Request $req)
    {
        if (empty($req->files)) {
            return [];
        }

        return array_map(function ($file) {
            if (!Arr::isAssoc($file)) {
                $files = [];
                foreach ($file as $f) {
                    $files['name'][]     = $f['name'];
                    $files['type'][]     = $f['type'];
                    $files['tmp_name'][] = $f['tmp_name'];
                    $files['error'][]    = $f['error'];
                    $files['size'][]     = $f['size'];
                }
                return $files;
            }
            return $file;
        }, $req->files);
    }

    protected function setCookie(Response $res, Cookie $cookie)
    {
        foreach ($cookie->getCookie() as $name => $val) {
            [$value, $expire, $option] = $val;

            $res->cookie($name, $value, $expire, $option['path'], $option['domain'], (bool) $option['secure'], (bool) $option['httponly'], $option['samesite']);
        }
    }

    protected function setHeader(Response $res, array $headers)
    {
        foreach ($headers as $key => $val) {
            $res->header($key, $val);
        }
    }

    protected function setStatus(Response $res, $code)
    {
        $res->status($code, Status::getReasonPhrase($code));
    }

    protected function sendResponse(Response $res, \think\Request $request, \think\Response $response)
    {
        switch (true) {
            case $response instanceof IteratorResponse:
                $this->sendIterator($res, $response);
                break;
            case $response instanceof FileResponse:
                $this->sendFile($res, $request, $response);
                break;
            default:
                $this->sendContent($res, $response);
        }
    }

    protected function sendIterator(Response $res, IteratorResponse $response)
    {
        $this->setHeader($res, $response->getHeader());
        $this->setStatus($res, $response->getCode());

        foreach ($response as $content) {
            $res->write($content);
        }
        $res->end();
    }

    protected function sendFile(Response $res, \think\Request $request, FileResponse $response)
    {
        $ifNoneMatch = $request->header('If-None-Match');
        $ifRange     = $request->header('If-Range');

        $code         = $response->getCode();
        $file         = $response->getFile();
        $eTag         = $response->getHeader('ETag');
        $lastModified = $response->getHeader('Last-Modified');

        $fileSize = $file->getSize();
        $offset   = 0;
        $length   = -1;

        if ($ifNoneMatch == $eTag) {
            $code = 304;
        } elseif (!$ifRange || $ifRange === $eTag || $ifRange === $lastModified) {
            $range = $request->header('Range', '');
            if (Str::startsWith($range, 'bytes=')) {
                [$start, $end] = explode('-', substr($range, 6), 2) + [0];

                $end = ('' === $end) ? $fileSize - 1 : (int) $end;

                if ('' === $start) {
                    $start = $fileSize - $end;
                    $end   = $fileSize - 1;
                } else {
                    $start = (int) $start;
                }

                if ($start <= $end) {
                    $end = min($end, $fileSize - 1);
                    if ($start < 0 || $start > $end) {
                        $code = 416;
                        $response->header([
                            'Content-Range' => sprintf('bytes */%s', $fileSize),
                        ]);
                    } elseif ($end - $start < $fileSize - 1) {
                        $length = $end < $fileSize ? $end - $start + 1 : -1;
                        $offset = $start;
                        $code   = 206;
                        $response->header([
                            'Content-Range'  => sprintf('bytes %s-%s/%s', $start, $end, $fileSize),
                            'Content-Length' => $end - $start + 1,
                        ]);
                    }
                }
            }
        }

        $this->setStatus($res, $code);
        $this->setHeader($res, $response->getHeader());

        if ($code >= 200 && $code < 300 && $length !== 0) {
            $res->sendfile($file->getPathname(), $offset, $length);
        } else {
            $res->end();
        }
    }

    protected function sendContent(Response $res, \think\Response $response)
    {
        $this->setStatus($res, $response->getCode());
        $this->setHeader($res, $response->getHeader());

        $content = $response->getContent();
        if ($content) {
            $contentSize = strlen($content);
            $chunkSize   = 8192;

            if ($contentSize > $chunkSize) {
                $sendSize = 0;
                do {
                    if (!$res->write(substr($content, $sendSize, $chunkSize))) {
                        break;
                    }
                } while (($sendSize += $chunkSize) < $contentSize);
            } else {
                $res->write($content);
            }
        }
        $res->end();
    }
}
