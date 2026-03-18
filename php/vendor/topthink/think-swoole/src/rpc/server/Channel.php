<?php

namespace think\swoole\rpc\server;

use Swoole\Coroutine;
use think\swoole\rpc\packer\Buffer;
use think\swoole\rpc\packer\File;

class Channel
{
    protected $header;

    protected $queue;

    public function __construct($handler)
    {
        $this->queue = new Coroutine\Channel(1);
        Coroutine::create(function () use ($handler) {
            $this->queue->push($handler);
        });
    }

    /**
     * @return File|Buffer
     */
    public function pop()
    {
        return $this->queue->pop();
    }

    public function push($handle)
    {
        return $this->queue->push($handle);
    }

    public function close()
    {
        return $this->queue->close();
    }

}
