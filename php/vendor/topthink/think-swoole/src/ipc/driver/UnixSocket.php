<?php

namespace think\swoole\ipc\driver;

use Swoole\Event;
use think\swoole\ipc\Driver;

class UnixSocket extends Driver
{
    public function getType()
    {
        return SWOOLE_IPC_UNIXSOCK;
    }

    public function prepare($workerNum)
    {

    }

    public function subscribe()
    {
        $socket = $this->getSocket($this->workerId);
        Event::add($socket, function (\Swoole\Coroutine\Socket $socket) {
            $message = unserialize($socket->recv());
            $this->manager->triggerEvent('message', $message);
        });
    }

    public function publish($workerId, $message)
    {
        $socket = $this->getSocket($workerId);
        $socket->send(serialize($message));
    }

    /**
     * @param $workerId
     * @return \Swoole\Coroutine\Socket
     */
    protected function getSocket($workerId)
    {
        return $this->manager->getPool()->getProcess($workerId)->exportSocket();
    }
}
