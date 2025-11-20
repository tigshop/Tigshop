<?php

namespace think\swoole\contract;

interface LockInterface
{
    public function prepare();

    public function lock($name, $expire = 60);

    public function unlock($name);
}
