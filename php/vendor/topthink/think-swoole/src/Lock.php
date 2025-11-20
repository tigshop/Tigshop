<?php

namespace think\swoole;

/**
 * @mixin \think\swoole\lock\Table
 */
class Lock extends \think\Manager
{
    protected $namespace = "\\think\\swoole\\lock\\";

    protected function resolveConfig(string $name)
    {
        return $this->app->config->get("swoole.lock.{$name}", []);
    }

    /**
     * 默认驱动
     * @return string|null
     */
    public function getDefaultDriver()
    {
        return $this->app->config->get('swoole.lock.type', 'table');
    }
}
