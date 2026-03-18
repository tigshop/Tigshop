<?php

namespace think\swoole\ipc;

use think\swoole\Manager;

abstract class Driver
{
    /** @var array */
    protected $config;

    /** @var Manager */
    protected $manager;

    protected $workerId;

    public function __construct(Manager $manager, array $config)
    {
        $this->manager = $manager;
        $this->config  = $config;
    }

    public function listenMessage($workerId)
    {
        $this->workerId = $workerId;

        $this->subscribe();
    }

    public function sendMessage($workerId, $message)
    {
        if ($workerId === $this->workerId) {
            $this->manager->triggerEvent('message', $message);
        } else {
            $this->publish($workerId, $message);
        }
    }

    abstract public function getType();

    abstract public function prepare($workerNum);

    abstract public function subscribe();

    abstract public function publish($workerId, $message);
}
