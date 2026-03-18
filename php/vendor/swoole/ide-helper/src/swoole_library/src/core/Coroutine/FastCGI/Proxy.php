<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole\Coroutine\FastCGI;

use InvalidArgumentException;
use Swoole\FastCGI\HttpRequest;
use Swoole\FastCGI\HttpResponse;
use Swoole\Http;

class Proxy
{
    /* @var string */
    protected $host;

    /* @var int */
    protected $port;

    /* @var float */
    protected $timeout = -1;

    /* @var string */
    protected $documentRoot;

    /* @var bool */
    protected $https = false;

    /* @var string */
    protected $index = 'index.php';

    /* @var array */
    protected $params = [];

    /* @var null|callable */
    protected $staticFileFilter;

    public function __construct(string $url, string $documentRoot = '/')
    {
        [$this->host, $this->port] = Client::parseUrl($url);
        $this->documentRoot = $documentRoot;
        $this->staticFileFilter = [$this, 'staticFileFiltrate'];
    }

    public function withTimeout(float $timeout): self
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function withHttps(bool $https): self
    {
        $this->https = $https;
        return $this;
    }

    public function withIndex(string $index): self
    {
        $this->index = $index;
        return $this;
    }

    public function getParam(string $name): ?string
    {
        return $this->params[$name] ?? null;
    }

    public function withParam(string $name, string $value): self
    {
        $this->params[$name] = $value;
        return $this;
    }

    public function withoutParam(string $name): self
    {
        unset($this->params[$name]);
        return $this;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function withParams(array $params): self
    {
        $this->params = $params;
        return $this;
    }

    public function withAddedParams(array $params): self
    {
        $this->params = $params + $this->params;
        return $this;
    }

    public function withStaticFileFilter(?callable $filter): self
    {
        $this->staticFileFilter = $filter;
        return $this;
    }

    public function translateRequest($userRequest): HttpRequest
    {
        $request = new HttpRequest();
        if ($userRequest instanceof \Swoole\Http\Request) {
            $server = $userRequest->server;
            $headers = $userRequest->header;
            $pathInfo = $userRequest->server['path_info'];
            $pathInfo = '/' . (ltrim($pathInfo, '/'));
            if (strlen($this->index) !== 0) {
                $extension = pathinfo($pathInfo, PATHINFO_EXTENSION);
                if (empty($extension)) {
                    $pathInfo = rtrim($pathInfo, '/') . '/' . $this->index;
                }
            }
            $requestUri = $scriptName = $documentUri = $server['request_uri'];
            $queryString = $server['query_string'] ?? '';
            if (strlen($queryString) !== 0) {
                $requestUri .= "?{$server['query_string']}";
            }
            $request
                ->withDocumentRoot($this->documentRoot)
                ->withScriptFilename($this->documentRoot . $pathInfo)
                ->withScriptName($scriptName)
                ->withDocumentUri($documentUri)
                ->withServerProtocol($server['server_protocol'])
                ->withServerAddr('127.0.0.1')
                ->withServerPort($server['server_port'])
                ->withRemoteAddr($server['remote_addr'])
                ->withRemotePort($server['remote_port'])
                ->withMethod($server['request_method'])
                ->withRequestUri($requestUri)
                ->withQueryString($queryString)
                ->withContentType($headers['content-type'] ?? '')
                ->withContentLength((int) ($headers['content-length'] ?? 0))
                ->withHeaders($headers)
                ->withBody($userRequest->rawContent())
                ->withAddedParams($this->params);
            if ($this->https) {
                $request->withParam('HTTPS', '1');
            }
        } else {
            throw new InvalidArgumentException('Not supported on ' . get_class($userRequest));
        }
        return $request;
    }

    public function translateResponse(HttpResponse $response, $userResponse): void
    {
        if ($userResponse instanceof \Swoole\Http\Response) {
            $userResponse->status($response->getStatusCode(), $response->getReasonPhrase());
            $userResponse->header = $response->getHeaders();
            $userResponse->cookie = $response->getSetCookieHeaderLines();
            $userResponse->end($response->getBody());
        } else {
            throw new InvalidArgumentException('Not supported on ' . get_class($userResponse));
        }
    }

    public function pass($userRequest, $userResponse): void
    {
        if (!($userRequest instanceof HttpRequest)) {
            $request = $this->translateRequest($userRequest);
        } else {
            $request = $userRequest;
        }
        unset($userRequest);
        if ($this->staticFileFilter) {
            $filter = $this->staticFileFilter;
            if ($filter($request, $userResponse)) {
                return;
            }
        }
        $client = new Client($this->host, $this->port);
        $response = $client->execute($request, $this->timeout);
        $this->translateResponse($response, $userResponse);
    }

    /* @return bool ['hit' => true, 'miss' => false] */
    public function staticFileFiltrate(HttpRequest $request, $userResponse): bool
    {
        if ($userResponse instanceof \Swoole\Http\Response) {
            $extension = pathinfo($request->getScriptFilename(), PATHINFO_EXTENSION);
            if ($extension !== 'php') {
                $realPath = realpath($request->getScriptFilename());
                if (!$realPath || strpos($realPath, $this->documentRoot) !== 0 || !is_file($realPath)) {
                    $userResponse->status(Http\Status::NOT_FOUND);
                } else {
                    $userResponse->sendfile($realPath);
                }
                return true;
            }
            return false;
        }
        throw new InvalidArgumentException('Not supported on ' . get_class($userResponse));
    }
}
