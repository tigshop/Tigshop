<?php

namespace think\swoole\watcher;

abstract class Driver
{
    abstract public function watch(callable $callback);

    abstract public function stop();
}
