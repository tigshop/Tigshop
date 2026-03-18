<?php

namespace think\swoole\websocket\message;

class PushMessage
{
    public $fd;
    public $data;

    public function __construct($fd, $data)
    {
        $this->fd   = $fd;
        $this->data = $data;
    }
}
