<?php

declare(strict_types=1);

namespace Swoole\WebSocket;

/**
 * @not-serializable Objects of this class cannot be serialized.
 */
class Server extends \Swoole\Http\Server
{
    public function push(int $fd, Frame|string $data, int $opcode = SWOOLE_WEBSOCKET_OPCODE_TEXT, int $flags = SWOOLE_WEBSOCKET_FLAG_FIN): bool
    {
    }

    public function disconnect(int $fd, int $code = SWOOLE_WEBSOCKET_CLOSE_NORMAL, string $reason = ''): bool
    {
    }

    public function isEstablished(int $fd): bool
    {
    }

    /**
     * @alias This method has an alias of \Swoole\WebSocket\Frame::pack().
     * @see \Swoole\WebSocket\Frame::pack()
     */
    public static function pack(Frame|string $data, int $opcode = SWOOLE_WEBSOCKET_OPCODE_TEXT, int $flags = SWOOLE_WEBSOCKET_FLAG_FIN): string
    {
    }

    /**
     * @alias This method has an alias of \Swoole\WebSocket\Frame::unpack().
     * @see \Swoole\WebSocket\Frame::unpack()
     */
    public static function unpack(string $data): Frame
    {
    }
}
