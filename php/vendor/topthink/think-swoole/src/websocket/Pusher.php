<?php

namespace think\swoole\websocket;

use think\swoole\contract\websocket\HandlerInterface;
use think\swoole\Manager;
use think\swoole\websocket\message\PushMessage;

/**
 * Class Pusher
 */
class Pusher
{

    /** @var Room */
    protected $room;

    /** @var Manager */
    protected $manager;

    /** @var HandlerInterface */
    protected $handler;

    protected $to = [];

    public function __construct(Manager $manager, Room $room, HandlerInterface $handler)
    {
        $this->manager = $manager;
        $this->room    = $room;
        $this->handler = $handler;
    }

    public function to(...$values)
    {
        foreach ($values as $value) {
            if (is_array($value)) {
                $this->to(...$value);
            } elseif (!in_array($value, $this->to)) {
                $this->to[] = $value;
            }
        }

        return $this;
    }

    /**
     * Push message to related descriptors
     * @param $data
     * @return void
     */
    public function push($data): void
    {
        $fds = [];

        foreach ($this->to as $room) {
            $clients = $this->room->getClients($room);
            if (!empty($clients)) {
                $fds = array_merge($fds, $clients);
            }
        }

        foreach (array_unique($fds) as $fd) {
            [$workerId, $fd] = explode('.', $fd);
            $data = $this->handler->encodeMessage($data);
            $this->manager->sendMessage((int) $workerId, new PushMessage((int) $fd, $data));
        }
    }

    public function emit(string $event, ...$data): void
    {
        $this->push(new Event($event, $data));
    }
}
