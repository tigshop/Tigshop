<?php

namespace think\swoole\watcher;

interface Driver
{
    public function watch(callable $callback);
}
