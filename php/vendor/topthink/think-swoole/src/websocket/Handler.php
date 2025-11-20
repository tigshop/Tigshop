<?php

namespace think\swoole\websocket;

use Swoole\WebSocket\Frame;
use think\Event;
use think\Request;
use think\swoole\contract\websocket\HandlerInterface;
use think\swoole\websocket\Event as WsEvent;

class Handler implements HandlerInterface
{
    protected $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    /**
     * "onOpen" listener.
     *
     * @param Request $request
     */
    public function onOpen(Request $request)
    {
        $this->event->trigger('swoole.websocket.Open', $request);
    }

    /**
     * "onMessage" listener.
     *
     * @param Frame $frame
     */
    public function onMessage(Frame $frame)
    {
        $this->event->trigger('swoole.websocket.Message', $frame);

        $event = $this->decode($frame->data);
        if ($event) {
            $this->event->trigger('swoole.websocket.Event', $event);
        }
    }

    /**
     * "onClose" listener.
     */
    public function onClose()
    {
        $this->event->trigger('swoole.websocket.Close');
    }

    protected function decode($payload)
    {
        $data = json_decode($payload, true);
        if (!empty($data['type'])) {
            return new WsEvent($data['type'], $data['data'] ?? null);
        }
        return null;
    }

    public function encodeMessage($message)
    {
        if ($message instanceof WsEvent) {
            return json_encode([
                'type' => $message->type,
                'data' => $message->data,
            ]);
        }
        return $message;
    }
}
