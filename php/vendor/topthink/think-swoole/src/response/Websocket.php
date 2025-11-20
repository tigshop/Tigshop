<?php

namespace think\swoole\response;

use think\Event;
use think\Response;

class Websocket extends Response
{
    protected $listeners = [];

    public function onOpen($listener)
    {
        $this->listeners['Open'] = $listener;
        return $this;
    }

    public function onMessage($listener)
    {
        $this->listeners['Message'] = $listener;
        return $this;
    }

    public function onEvent($listener)
    {
        $this->listeners['Event'] = $listener;
        return $this;
    }

    public function onClose($listener)
    {
        $this->listeners['Close'] = $listener;
        return $this;
    }

    public function onConnect($listener)
    {
        $this->listeners['Connect'] = $listener;
        return $this;
    }

    public function onDisconnect($listener)
    {
        $this->listeners['Disconnect'] = $listener;
        return $this;
    }

    public function onPing($listener)
    {
        $this->listeners['Ping'] = $listener;
        return $this;
    }

    public function onPong($listener)
    {
        $this->listeners['Pong'] = $listener;
        return $this;
    }

    public function subscribe(Event $event)
    {
        foreach ($this->listeners as $eventName => $listener) {
            $event->listen('swoole.websocket.' . $eventName, $listener);
        }
    }
}
