<?php

declare(strict_types=1);

namespace Swoole\WebSocket;

class Frame implements \Stringable
{
    public int $fd = 0;

    public string $data = '';

    public int $opcode = SWOOLE_WEBSOCKET_OPCODE_TEXT;

    public int $flags = SWOOLE_WEBSOCKET_FLAG_FIN;

    public bool $finish;

    public function __toString(): string
    {
    }

    /**
     * @alias Alias of method \Swoole\WebSocket\Server::pack().
     * @see \Swoole\WebSocket\Server::pack()
     */
    public static function pack(Frame|string $data, int $opcode = SWOOLE_WEBSOCKET_OPCODE_TEXT, int $flags = SWOOLE_WEBSOCKET_FLAG_FIN): string
    {
    }

    /**
     * @alias Alias of method \Swoole\WebSocket\Server::unpack().
     * @see \Swoole\WebSocket\Server::unpack()
     */
    public static function unpack(string $data): Frame
    {
    }
}
