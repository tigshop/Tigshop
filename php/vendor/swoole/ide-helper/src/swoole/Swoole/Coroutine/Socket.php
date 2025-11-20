<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

use Swoole\Client;

/**
 * A coroutine-friendly socket class used to represent a socket connection.
 *
 * When runtime hook flag SWOOLE_HOOK_SOCKETS is enabled, this class is used to represent a \Socket object (i.e., it's a
 * child class of built-in PHP class \Socket).
 *
 * @not-serializable Objects of this class cannot be serialized.
 * @alias This class has an alias of "\Co\Socket" when directive "swoole.use_shortname" is not explicitly turned off.
 * @see \Co\Socket
 * @see \Socket
 */
class Socket
{
    public int $fd = -1;

    public int $domain = 0;

    public int $type = 0;

    public int $protocol = 0;

    public int $errCode = 0;

    public string $errMsg = '';

    /**
     * @since 5.1.0
     */
    public $__ext_sockets_nonblock = false;

    /**
     * @since 5.1.0
     */
    public $__ext_sockets_timeout = 0;

    public function __construct(int $domain, int $type, int $protocol = 0)
    {
    }

    public function bind(string $address, int $port = 0): bool
    {
    }

    public function listen(int $backlog = 512): bool
    {
    }

    public function accept(float $timeout = 0): Socket|false
    {
    }

    public function connect(string $host, int $port = 0, float $timeout = 0): bool
    {
    }

    /**
     * Check liveness of the socket.
     *
     * @return bool Returns true if the socket is still alive, false otherwise.
     * @since 4.5.0
     */
    public function checkLiveness(): bool
    {
    }

    /**
     * Get the coroutine ID that the socket is bound to of the specified event type.
     *
     * @param int $event Type of the event that the socket is performing inside the coroutine. It can be one of the following values:
     *                   - SWOOLE_EVENT_READ
     *                   - SWOOLE_EVENT_WRITE
     *                   - SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE.
     * @return int Returns the coroutine ID that the socket is bound to of the specified event type. Returns 0 if no matching coroutine is found.
     * @since 5.0.2
     */
    public function getBoundCid(int $event): int
    {
    }

    /**
     * @since 4.5.0
     */
    public function peek(int $length = 65536): string|false
    {
    }

    /**
     * @see \Swoole\Coroutine\Socket::recvAll()
     * @see \Swoole\Coroutine\Socket::recvLine()
     * @see \Swoole\Coroutine\Socket::recvWithBuffer()
     */
    public function recv(int $length = 65536, float $timeout = 0): string|false
    {
    }

    /**
     * @see \Swoole\Coroutine\Socket::recv()
     * @see \Swoole\Coroutine\Socket::recvLine()
     * @see \Swoole\Coroutine\Socket::recvWithBuffer()
     */
    public function recvAll(int $length = 65536, float $timeout = 0): string|false
    {
    }

    /**
     * @see \Swoole\Coroutine\Socket::recv()
     * @see \Swoole\Coroutine\Socket::recvAll()
     * @see \Swoole\Coroutine\Socket::recvWithBuffer()
     */
    public function recvLine(int $length = 65536, float $timeout = 0): string|false
    {
    }

    /**
     * @see \Swoole\Coroutine\Socket::recv()
     * @see \Swoole\Coroutine\Socket::recvAll()
     * @see \Swoole\Coroutine\Socket::recvLine()
     */
    public function recvWithBuffer(int $length = 65536, float $timeout = 0): string|false
    {
    }

    /**
     * @since 4.4.0
     */
    public function recvPacket(float $timeout = 0): string|false
    {
    }

    public function send(string $data, float $timeout = 0): int|false
    {
    }

    public function readVector(array $io_vector, float $timeout = 0): array|false
    {
    }

    public function readVectorAll(array $io_vector, float $timeout = 0): array|false
    {
    }

    public function writeVector(array $io_vector, float $timeout = 0): int|false
    {
    }

    public function writeVectorAll(array $io_vector, float $timeout = 0): int|false
    {
    }

    /**
     * @since 4.4.0
     */
    public function sendFile(string $file, int $offset = 0, int $length = 0): bool
    {
    }

    public function sendAll(string $data, float $timeout = 0): int|false
    {
    }

    public function recvfrom(mixed &$peername, float $timeout = 0): string|false
    {
    }

    public function sendto(string $addr, int $port, string $data): int|false
    {
    }

    public function getOption(int $level, int $opt_name): mixed
    {
    }

    /**
     * @return bool Returns TRUE if succeeds; otherwise FALSE.
     * @since 4.4.0
     */
    public function setProtocol(array $settings): bool
    {
    }

    public function setOption(int $level, int $opt_name, mixed $opt_value): bool
    {
    }

    /**
     * This method is available only when OpenSSL support is enabled (i.e., when Swoole is installed with configuration
     * option "--enable-openssl" included).
     *
     * @since 4.5.0
     */
    public function sslHandshake(): bool
    {
    }

    /**
     * @param int $how A Client::SHUT_* constant.
     */
    public function shutdown(int $how = Client::SHUT_RDWR): bool
    {
    }

    /**
     * @param int $event a SWOOLE_EVENT_READ or SWOOLE_EVENT_WRITE event.
     * @since 4.4.0
     */
    public function cancel(int $event = SWOOLE_EVENT_READ): bool
    {
    }

    public function close(): bool
    {
    }

    /**
     * @return array|false If succeeds, return an array with two fields in it: "address" and "port"; otherwise, return FALSE.
     */
    public function getpeername(): array|false
    {
    }

    /**
     * @return array|false If succeeds, return an array with two fields in it: "address" and "port"; otherwise, return FALSE.
     */
    public function getsockname(): array|false
    {
    }

    /**
     * Check if the socket is closed.
     *
     * @return bool Returns true if the socket is closed, false otherwise.
     * @since 4.8.3
     */
    public function isClosed(): bool
    {
    }

    /**
     * @since 5.0.0
     * @param mixed $stream
     */
    public static function import($stream): Socket|false
    {
    }
}
