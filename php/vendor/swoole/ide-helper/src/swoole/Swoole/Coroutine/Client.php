<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

/**
 * @not-serializable Objects of this class cannot be serialized.
 * @alias This class has an alias of "\Co\Client" when directive "swoole.use_shortname" is not explicitly turned off.
 * @see \Co\Client
 */
class Client
{
    public const MSG_OOB = 1;

    public const MSG_PEEK = 2;

    public const MSG_DONTWAIT = 64;

    public const MSG_WAITALL = 256;

    public $errCode = 0;

    public $errMsg = '';

    public $fd = -1;

    public $type = 1;

    public $setting;

    public $connected = false;

    /**
     * The socket object of the client.
     *
     * This is a private property before Swoole 5.0.2.
     */
    public ?Socket $socket;

    public function __construct(int $type)
    {
    }

    public function set(array $settings): bool
    {
    }

    public function connect(string $host, int $port = 0, float $timeout = 0, int $sock_flag = 0): bool
    {
    }

    public function recv(float $timeout = 0): string|false
    {
    }

    public function peek(int $length = 65535): string|false
    {
    }

    public function send(string $data, float $timeout = 0): int|false
    {
    }

    public function sendfile(string $filename, int $offset = 0, int $length = 0): bool
    {
    }

    public function sendto(string $address, int $port, string $data): bool
    {
    }

    public function recvfrom(int $length, mixed &$address, mixed &$port = 0): string|false
    {
    }

    /**
     * This method is available only when OpenSSL support is enabled (i.e., when Swoole is installed with configuration
     * option "--enable-openssl" included).
     */
    public function enableSSL(): bool
    {
    }

    /**
     * This method is available only when OpenSSL support is enabled (i.e., when Swoole is installed with configuration
     * option "--enable-openssl" included).
     */
    public function getPeerCert(): string|false
    {
    }

    /**
     * This method is available only when OpenSSL support is enabled (i.e., when Swoole is installed with configuration
     * option "--enable-openssl" included).
     */
    public function verifyPeerCert(bool $allow_self_signed = false): bool
    {
    }

    public function isConnected(): bool
    {
    }

    public function getsockname(): array|false
    {
    }

    public function getpeername(): array|false
    {
    }

    public function close(): bool
    {
    }

    public function exportSocket(): Socket|false
    {
    }
}
