<?php

namespace think\swoole;

use think\swoole\watcher\Driver;

/**
 * @mixin Driver
 */
class Watcher extends \think\Manager
{
    protected $namespace = '\\think\\swoole\\watcher\\';

    protected function getConfig(string $name, $default = null)
    {
        return $this->app->config->get('swoole.hot_update.' . $name, $default);
    }

    protected function resolveParams($name): array
    {
        return [
            array_filter($this->getConfig('include', []), function ($dir) {
                return is_dir($dir);
            }),
            $this->getConfig('exclude', []),
            $this->getConfig('name', []),
        ];
    }

    public function getDefaultDriver()
    {
        return $this->getConfig('type', 'scan');
    }
}
