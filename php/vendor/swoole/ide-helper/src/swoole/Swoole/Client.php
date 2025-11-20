<?php

declare(strict_types=1);

namespace Swoole;

/**
 * @not-serializable Objects of this class cannot be serialized.
 */
class Client
{
    public const MSG_OOB = 1;

    public const MSG_PEEK = 2;

    public const MSG_DONTWAIT = 64;

    public const MSG_WAITALL = 256;

    public const SHUT_RDWR = 2;

    public const SHUT_RD = 0;

    public const SHUT_WR = 1;

    public int $errCode = 0;

    public int $sock = -1;

    public bool $reuse = false;

    public int $reuseCount = 0;

    /**
     * Socket type.
     *
     * It could be in one the following values:
     *    - SWOOLE_SOCK_TCP
     *    - SWOOLE_SOCK_UDP
     *    - SWOOLE_SOCK_TCP6
     *    - SWOOLE_SOCK_UDP6
     *    - SWOOLE_SOCK_UNIX_STREAM
     *    - SWOOLE_SOCK_UNIX_DGRAM
     * In addition to specifying a socket type, it may include the bitwise OR of any of the following socket flags, to
     * modify the behavior of the socket connection:
     *   - SWOOLE_SSL
     *   - SWOOLE_ASYNC (No longer used, but still kept for backward compatibility.)
     *   - SWOOLE_SYNC  (No longer used, but still kept for backward compatibility.)
     *   - SWOOLE_KEEP
     *
     * Thus, the value of $type could be in the format of any of the following:
     *   - SWOOLE_SOCK_TCP
     *   - SWOOLE_SOCK_TCP | SWOOLE_KEEP
     *   - SWOOLE_SOCK_TCP | SWOOLE_KEEP | SWOOLE_SSL
     */
    public int $type;

    public string $id;

    public array $setting;

    /**
     * @param int $type Socket type. Please check comments on property $type for more details.
     * @param bool $async Whether to enable asynchronous I/O or not. Since v4.4.8, this class supports synchronous I/O (in blocking mode) only.
     * @pseudocode-included This is a built-in method in Swoole. The PHP code included inside this method is for explanation purpose only.
     */
    public function __construct(int $type, bool $async = SWOOLE_SOCK_SYNC, string $id = '')
    {
        if ($async) {
            throw new \Error('Please install the ext-async extension, and use class Swoole\Async\Client instead.');
        }

        // Here are some statements to validate the $type.

        $this->type = $type;
        if (!empty($id)) {
            $this->id = $id;
        }
    }

    /**
     * Set options of the client object before connecting to a remote server.
     *
     * @return bool TRUE if succeeds; otherwise FALSE.
     * @pseudocode-included This is a built-in method in Swoole. The PHP code included inside this method is for explanation purpose only.
     */
    public function set(array $settings): bool
    {
        $this->setting = array_merge($this->setting ?? [], $settings);
        return true;
    }

    public function connect(string $host, int $port = 0, float $timeout = 0.5, int $sock_flag = 0): bool
    {
    }

    public function recv(int $size = 65536, int $flag = 0): string|false
    {
    }

    public function send(string $data, int $flag = 0): int|false
    {
    }

    public function sendfile(string $filename, int $offset = 0, int $length = 0): bool
    {
    }

    public function sendto(string $ip, int $port, string $data): bool
    {
    }

    public function shutdown(int $how): bool
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
    public function getPeerCert(): bool|string
    {
    }

    /**
     * This method is available only when OpenSSL support is enabled (i.e., when Swoole is installed with configuration
     * option "--enable-openssl" included).
     */
    public function verifyPeerCert(): bool
    {
    }

    /**
     * Check if the client is connected or not.
     *
     * @return bool TRUE if the client is connected; otherwise FALSE.
     */
    public function isConnected(): bool
    {
    }

    public function getsockname(): array|false
    {
    }

    public function getpeername(): array|false
    {
    }

    public function close(bool $force = false): bool
    {
    }

    /**
     * Get the socket handle of the client.
     *
     * This method is available only when Swoole is installed with option "--enable-sockets" included.
     *
     * @return \Socket|false Returns a Socket object on success; otherwise FALSE.
     */
    public function getSocket(): \Socket|false
    {
    }
}
