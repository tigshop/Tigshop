<?php

declare(strict_types=1);

namespace Swoole\Coroutine\Http;

use Swoole\Coroutine\Socket;
use Swoole\WebSocket\Frame;

/**
 * @not-serializable Objects of this class cannot be serialized.
 * @alias This class has an alias of "\Co\Http\Client" when directive "swoole.use_shortname" is not explicitly turned off.
 * @see \Co\Http\Client
 */
class Client
{
    /**
     * The socket object of the client.
     *
     * @since 5.0.2
     */
    public ?Socket $socket;

    public int $errCode = 0;

    public string $errMsg = '';

    public bool $connected = false;

    public string $host = '';

    public int $port = 0;

    public bool $ssl = false;

    public $setting;

    public $requestMethod;

    public $requestHeaders;

    public $requestBody;

    public $uploadFiles;

    public $downloadFile;

    public int $downloadOffset = 0;

    /**
     * Status code of last operation. 0 means no error.
     *
     * For details, please check SWOOLE_HTTP_CLIENT_ESTATUS_* constants.
     */
    public int $statusCode = 0;

    public $headers;

    public $set_cookie_headers;

    public $cookies;

    public string $body = '';

    public function __construct(string $host, int $port = 0, bool $ssl = false)
    {
    }

    public function set(array $settings): bool
    {
    }

    public function getDefer(): bool
    {
    }

    public function setDefer(bool $defer = true): bool
    {
    }

    public function setMethod(string $method): bool
    {
    }

    public function setHeaders(array $headers): bool
    {
    }

    /**
     * @since 4.4.0
     */
    public function setBasicAuth(string $username, string $password): void
    {
    }

    public function setCookies(array $cookies): bool
    {
    }

    public function setData(string|array $data): bool
    {
    }

    public function addFile(string $path, string $name, ?string $type = null, ?string $filename = null, int $offset = 0, int $length = 0): bool
    {
    }

    public function addData(string $path, string $name, ?string $type = null, ?string $filename = null): bool
    {
    }

    public function execute(string $path): bool
    {
    }

    /**
     * @since 4.5.0
     */
    public function getpeername(): array|false
    {
    }

    /**
     * @since 4.5.0
     */
    public function getsockname(): array|false
    {
    }

    public function get(string $path): bool
    {
    }

    public function post(string $path, mixed $data): bool
    {
    }

    public function download(string $path, string $file, int $offset = 0): bool
    {
    }

    public function getBody(): string|false
    {
    }

    public function getHeaders(): array|false|null
    {
    }

    public function getCookies(): array|false|null
    {
    }

    public function getStatusCode(): int|false
    {
    }

    public function getHeaderOut(): string|false
    {
    }

    /**
     * This method is available only when OpenSSL support is enabled (i.e., when Swoole is installed with configuration
     * option "--enable-openssl" included).
     *
     * @since 4.5.0
     */
    public function getPeerCert(): string|false
    {
    }

    public function upgrade(string $path): bool
    {
    }

    public function push(mixed $data, int $opcode = SWOOLE_WEBSOCKET_OPCODE_TEXT, int $flags = SWOOLE_WEBSOCKET_FLAG_FIN): bool
    {
    }

    public function recv(float $timeout = 0): Frame|bool
    {
    }

    public function close(): bool
    {
    }
}
