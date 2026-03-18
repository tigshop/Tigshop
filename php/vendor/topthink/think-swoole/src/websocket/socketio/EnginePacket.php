<?php

namespace think\swoole\websocket\socketio;

class EnginePacket
{
    /**
     * Engine.io packet type `open`.
     */
    const OPEN = 0;

    /**
     * Engine.io packet type `close`.
     */
    const CLOSE = 1;

    /**
     * Engine.io packet type `ping`.
     */
    const PING = 2;

    /**
     * Engine.io packet type `pong`.
     */
    const PONG = 3;

    /**
     * Engine.io packet type `message`.
     */
    const MESSAGE = 4;

    /**
     * Engine.io packet type 'upgrade'
     */
    const UPGRADE = 5;

    /**
     * Engine.io packet type `noop`.
     */
    const NOOP = 6;

    public $type;

    public $data = '';

    public function __construct($type, $data = '')
    {
        $this->type = $type;
        $this->data = $data;
    }

    public static function open($payload)
    {
        return new static(self::OPEN, $payload);
    }

    public static function pong($payload = '')
    {
        return new static(self::PONG, $payload);
    }

    public static function ping()
    {
        return new static(self::PING);
    }

    public static function message($payload)
    {
        return new static(self::MESSAGE, $payload);
    }

    public static function fromString(string $packet)
    {
        return new static(substr($packet, 0, 1), substr($packet, 1) ?? '');
    }

    public function toString()
    {
        return $this->type . $this->data;
    }
}
