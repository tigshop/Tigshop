<?php

declare(strict_types=1);

namespace Swoole\Coroutine\Http2;

use Swoole\Coroutine\Socket;
use Swoole\Http2\Request;
use Swoole\Http2\Response;

/**
 * @not-serializable Objects of this class cannot be serialized.
 * @alias This class has an alias of "\Co\Http2\Client" when directive "swoole.use_shortname" is not explicitly turned off.
 * @see \Co\Http2\Client
 */
class Client
{
    public int $errCode = 0;

    public string $errMsg = '';

    public int $sock = -1;

    public int $type = 0;

    public $setting;

    /**
     * The socket object of the client.
     *
     * @since 5.0.2
     */
    public ?Socket $socket;

    public bool $connected = false;

    public $host;

    public int $port = 0;

    /**
     * @since 4.4.0
     */
    public bool $ssl = false;

    public function __construct(string $host, int $port = 80, bool $open_ssl = false)
    {
    }

    public function set(array $settings): bool
    {
    }

    public function connect(): bool
    {
    }

    public function stats(string $key = ''): int|array
    {
    }

    public function isStreamExist(int $stream_id): bool
    {
    }

    public function send(Request $request): int|false
    {
    }

    public function write(int $stream_id, mixed $data, bool $end_stream = false): bool
    {
    }

    public function recv(float $timeout = 0): Response|false
    {
    }

    /**
     * @since 4.5.0
     */
    public function read(float $timeout = 0): Response|false
    {
    }

    /**
     * Send a GOAWAY frame to the remote peer.
     *
     * @param int $error_code An HTTP2 error code that contains the reason for closing the connection. HTTP2 error codes are defined as SWOOLE_HTTP2_ERROR_* constants.
     * @param string $debug_data Additional debug data to send to the remote peer.
     * @return bool TRUE on success or FALSE on failure.
     * @see \Swoole\Http\Response::goaway()
     */
    public function goaway(int $error_code = SWOOLE_HTTP2_ERROR_NO_ERROR, string $debug_data = ''): bool
    {
    }

    public function ping(): bool
    {
    }

    public function close(): bool
    {
    }
}
