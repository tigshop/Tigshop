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

use Swoole\FastCGI\HttpRequest;
use Swoole\FastCGI\HttpResponse;
use Swoole\Http;
use Swoole\Http\Request as SwooleHttpRequest;
use Swoole\Http\Response as SwooleHttpResponse;

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
        $this->documentRoot        = $documentRoot;
        $this->staticFileFilter    = [$this, 'staticFileFiltrate'];
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

    public function translateRequest(SwooleHttpRequest $userRequest): HttpRequest
    {
        $server   = $userRequest->server;
        $headers  = $userRequest->header;
        $pathInfo = $userRequest->server['path_info'];
        $pathInfo = '/' . ltrim($pathInfo, '/');
        if (strlen($this->index) !== 0) {
            $extension = pathinfo($pathInfo, PATHINFO_EXTENSION);
            if (empty($extension)) {
                $pathInfo = rtrim($pathInfo, '/') . '/' . $this->index;
            }
        }
        $requestUri  = $scriptName = $documentUri = $server['request_uri'];
        $queryString = $server['query_string'] ?? '';
        if (strlen($queryString) !== 0) {
            $requestUri .= "?{$server['query_string']}";
        }
        $request = (new HttpRequest())
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
            ->withAddedParams($this->params)
        ;
        if ($this->https) {
            $request->withParam('HTTPS', '1');
        }

        return $request;
    }

    public function translateResponse(HttpResponse $response, SwooleHttpResponse $userResponse): void
    {
        $userResponse->status($response->getStatusCode(), $response->getReasonPhrase());
        $userResponse->header = $response->getHeaders();
        $userResponse->cookie = $response->getSetCookieHeaderLines();
        $userResponse->end($response->getBody());
    }

    public function pass(SwooleHttpRequest|HttpRequest $userRequest, SwooleHttpResponse $userResponse): void
    {
        if (!$userRequest instanceof HttpRequest) {
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
        $response = (new Client($this->host, $this->port))->execute($request, $this->timeout);
        $this->translateResponse($response, $userResponse);
    }

    /**
     * Send content of a static file to the client, if the file is accessible and is not a PHP file.
     *
     * @return bool True if the file doesn't have an extension of 'php', false otherwise. Note that the file may not be
     *              accessible even the return value is true.
     */
    public function staticFileFiltrate(HttpRequest $request, SwooleHttpResponse $userResponse): bool
    {
        $extension = pathinfo($request->getScriptFilename(), PATHINFO_EXTENSION);
        if ($extension !== 'php') {
            $realPath = realpath($request->getScriptFilename());
            if (!$realPath || !str_starts_with($realPath, $this->documentRoot) || !is_file($realPath)) {
                $userResponse->status(Http\Status::NOT_FOUND);
            } else {
                $userResponse->sendfile($realPath);
            }
            return true;
        }
        return false;
    }
}
