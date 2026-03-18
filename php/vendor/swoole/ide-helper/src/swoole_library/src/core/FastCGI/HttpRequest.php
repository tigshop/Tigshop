<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole\FastCGI;

use InvalidArgumentException;

class HttpRequest extends Request
{
    protected $params = [
        'REQUEST_SCHEME' => 'http',
        'REQUEST_METHOD' => 'GET',
        'DOCUMENT_ROOT' => '',
        'SCRIPT_FILENAME' => '',
        'SCRIPT_NAME' => '',
        'DOCUMENT_URI' => '/',
        'REQUEST_URI' => '/',
        'QUERY_STRING' => '',
        'CONTENT_TYPE' => 'text/plain',
        'CONTENT_LENGTH' => '0',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'SERVER_SOFTWARE' => 'swoole/' . SWOOLE_VERSION,
        'REMOTE_ADDR' => 'unknown',
        'REMOTE_PORT' => '0',
        'SERVER_ADDR' => 'unknown',
        'SERVER_PORT' => '0',
        'SERVER_NAME' => 'Swoole',
        'REDIRECT_STATUS' => '200',
    ];

    public function getScheme(): ?string
    {
        return $this->params['REQUEST_SCHEME'] ?? null;
    }

    public function withScheme(string $scheme): self
    {
        $this->params['REQUEST_SCHEME'] = $scheme;
        return $this;
    }

    public function withoutScheme(): void
    {
        unset($this->params['REQUEST_SCHEME']);
    }

    public function getMethod(): ?string
    {
        return $this->params['REQUEST_METHOD'] ?? null;
    }

    public function withMethod(string $method): self
    {
        $this->params['REQUEST_METHOD'] = $method;
        return $this;
    }

    public function withoutMethod(): void
    {
        unset($this->params['REQUEST_METHOD']);
    }

    public function getDocumentRoot(): ?string
    {
        return $this->params['DOCUMENT_ROOT'] ?? null;
    }

    public function withDocumentRoot(string $documentRoot): self
    {
        $this->params['DOCUMENT_ROOT'] = $documentRoot;
        return $this;
    }

    public function withoutDocumentRoot(): void
    {
        unset($this->params['DOCUMENT_ROOT']);
    }

    public function getScriptFilename(): ?string
    {
        return $this->params['SCRIPT_FILENAME'] ?? null;
    }

    public function withScriptFilename(string $scriptFilename): self
    {
        $this->params['SCRIPT_FILENAME'] = $scriptFilename;
        return $this;
    }

    public function withoutScriptFilename(): void
    {
        unset($this->params['SCRIPT_FILENAME']);
    }

    public function getScriptName(): ?string
    {
        return $this->params['SCRIPT_NAME'] ?? null;
    }

    public function withScriptName(string $scriptName): self
    {
        $this->params['SCRIPT_NAME'] = $scriptName;
        return $this;
    }

    public function withoutScriptName(): void
    {
        unset($this->params['SCRIPT_NAME']);
    }

    public function withUri(string $uri): self
    {
        $info = parse_url($uri);
        return $this->withRequestUri($uri)
            ->withDocumentUri($info['path'] ?? '')
            ->withQueryString($info['query'] ?? '');
    }

    public function getDocumentUri(): ?string
    {
        return $this->params['DOCUMENT_URI'] ?? null;
    }

    public function withDocumentUri(string $documentUri): self
    {
        $this->params['DOCUMENT_URI'] = $documentUri;
        return $this;
    }

    public function withoutDocumentUri(): void
    {
        unset($this->params['DOCUMENT_URI']);
    }

    public function getRequestUri(): ?string
    {
        return $this->params['REQUEST_URI'] ?? null;
    }

    public function withRequestUri(string $requestUri): self
    {
        $this->params['REQUEST_URI'] = $requestUri;
        return $this;
    }

    public function withoutRequestUri(): void
    {
        unset($this->params['REQUEST_URI']);
    }

    public function withQuery($query): self
    {
        if (is_array($query)) {
            $query = http_build_query($query);
        }
        return $this->withQueryString($query);
    }

    public function getQueryString(): ?string
    {
        return $this->params['QUERY_STRING'] ?? null;
    }

    public function withQueryString(string $queryString): self
    {
        $this->params['QUERY_STRING'] = $queryString;
        return $this;
    }

    public function withoutQueryString(): void
    {
        unset($this->params['QUERY_STRING']);
    }

    public function getContentType(): ?string
    {
        return $this->params['CONTENT_TYPE'] ?? null;
    }

    public function withContentType(string $contentType): self
    {
        $this->params['CONTENT_TYPE'] = $contentType;
        return $this;
    }

    public function withoutContentType(): void
    {
        unset($this->params['CONTENT_TYPE']);
    }

    public function getContentLength(): ?int
    {
        return isset($this->params['CONTENT_LENGTH']) ? (int) $this->params['CONTENT_LENGTH'] : null;
    }

    public function withContentLength(int $contentLength): self
    {
        $this->params['CONTENT_LENGTH'] = (string) $contentLength;
        return $this;
    }

    public function withoutContentLength(): void
    {
        unset($this->params['CONTENT_LENGTH']);
    }

    public function getGatewayInterface(): ?string
    {
        return $this->params['GATEWAY_INTERFACE'] ?? null;
    }

    public function withGatewayInterface(string $gatewayInterface): self
    {
        $this->params['GATEWAY_INTERFACE'] = $gatewayInterface;
        return $this;
    }

    public function withoutGatewayInterface(): void
    {
        unset($this->params['GATEWAY_INTERFACE']);
    }

    public function getServerProtocol(): ?string
    {
        return $this->params['SERVER_PROTOCOL'] ?? null;
    }

    public function withServerProtocol(string $serverProtocol): self
    {
        $this->params['SERVER_PROTOCOL'] = $serverProtocol;
        return $this;
    }

    public function withoutServerProtocol(): void
    {
        unset($this->params['SERVER_PROTOCOL']);
    }

    public function withProtocolVersion(string $protocolVersion): self
    {
        if (!is_numeric($protocolVersion)) {
            throw new InvalidArgumentException('Protocol version must be numeric');
        }
        $this->params['SERVER_PROTOCOL'] = "HTTP/{$protocolVersion}";
        return $this;
    }

    public function getServerSoftware(): ?string
    {
        return $this->params['SERVER_SOFTWARE'] ?? null;
    }

    public function withServerSoftware(string $serverSoftware): self
    {
        $this->params['SERVER_SOFTWARE'] = $serverSoftware;
        return $this;
    }

    public function withoutServerSoftware(): void
    {
        unset($this->params['SERVER_SOFTWARE']);
    }

    public function getRemoteAddr(): ?string
    {
        return $this->params['REMOTE_ADDR'] ?? null;
    }

    public function withRemoteAddr(string $remoteAddr): self
    {
        $this->params['REMOTE_ADDR'] = $remoteAddr;
        return $this;
    }

    public function withoutRemoteAddr(): void
    {
        unset($this->params['REMOTE_ADDR']);
    }

    public function getRemotePort(): ?int
    {
        return isset($this->params['REMOTE_PORT']) ? (int) $this->params['REMOTE_PORT'] : null;
    }

    public function withRemotePort(int $remotePort): self
    {
        $this->params['REMOTE_PORT'] = (string) $remotePort;
        return $this;
    }

    public function withoutRemotePort(): void
    {
        unset($this->params['REMOTE_PORT']);
    }

    public function getServerAddr(): ?string
    {
        return $this->params['SERVER_ADDR'] ?? null;
    }

    public function withServerAddr(string $serverAddr): self
    {
        $this->params['SERVER_ADDR'] = $serverAddr;
        return $this;
    }

    public function withoutServerAddr(): void
    {
        unset($this->params['SERVER_ADDR']);
    }

    public function getServerPort(): ?int
    {
        return isset($this->params['SERVER_PORT']) ? (int) $this->params['SERVER_PORT'] : null;
    }

    public function withServerPort(int $serverPort): self
    {
        $this->params['SERVER_PORT'] = (string) $serverPort;
        return $this;
    }

    public function withoutServerPort(): void
    {
        unset($this->params['SERVER_PORT']);
    }

    public function getServerName(): ?string
    {
        return $this->params['SERVER_NAME'] ?? null;
    }

    public function withServerName(string $serverName): self
    {
        $this->params['SERVER_NAME'] = $serverName;
        return $this;
    }

    public function withoutServerName(): void
    {
        unset($this->params['SERVER_NAME']);
    }

    public function getRedirectStatus(): ?string
    {
        return $this->params['REDIRECT_STATUS'] ?? null;
    }

    public function withRedirectStatus(string $redirectStatus): self
    {
        $this->params['REDIRECT_STATUS'] = $redirectStatus;
        return $this;
    }

    public function withoutRedirectStatus(): void
    {
        unset($this->params['REDIRECT_STATUS']);
    }

    public function getHeader(string $name): ?string
    {
        return $this->params[static::convertHeaderNameToParamName($name)] ?? null;
    }

    public function withHeader(string $name, string $value): self
    {
        $this->params[static::convertHeaderNameToParamName($name)] = $value;
        return $this;
    }

    public function withoutHeader(string $name): void
    {
        unset($this->params[static::convertHeaderNameToParamName($name)]);
    }

    public function getHeaders(): array
    {
        $headers = [];
        foreach ($this->params as $name => $value) {
            if (strpos($name, 'HTTP_') === 0) {
                $headers[static::convertParamNameToHeaderName($name)] = $value;
            }
        }
        return $headers;
    }

    public function withHeaders(array $headers): self
    {
        foreach ($headers as $name => $value) {
            $this->withHeader($name, $value);
        }
        return $this;
    }

    /** @return $this */
    public function withBody($body): Message
    {
        if (is_array($body)) {
            $body = http_build_query($body);
            $this->withContentType('application/x-www-form-urlencoded');
        }
        parent::withBody($body);
        return $this->withContentLength(strlen($body));
    }

    protected static function convertHeaderNameToParamName(string $name)
    {
        return 'HTTP_' . str_replace('-', '_', strtoupper($name));
    }

    protected static function convertParamNameToHeaderName(string $name)
    {
        return ucwords(str_replace('_', '-', substr($name, strlen('HTTP_'))), '-');
    }
}
