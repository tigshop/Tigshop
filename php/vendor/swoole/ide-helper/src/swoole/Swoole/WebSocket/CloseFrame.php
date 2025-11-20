<?php

declare(strict_types=1);

namespace Swoole\WebSocket;

class CloseFrame extends Frame
{
    /**
     * {@inheritdoc}
     */
    public int $opcode = SWOOLE_WEBSOCKET_OPCODE_CLOSE;

    public int $code = WEBSOCKET_CLOSE_NORMAL;

    public string $reason = '';
}
