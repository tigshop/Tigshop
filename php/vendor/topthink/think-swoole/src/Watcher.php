<?php

namespace think\swoole;

/**
 * @mixin \think\swoole\watcher\Driver
 */
class Watcher extends \think\Manager
{
    protected $namespace = '\\think\\swoole\\watcher\\driver\\';

    protected function getConfig(string $name, $default = null)
    {
        return $this->app->config->get('swoole.hot_update.' . $name, $default);
    }

    /**
     * @param $name
     * @return \think\swoole\watcher\Driver
     */
    public function monitor($name = null)
    {
        return $this->driver($name);
    }

    protected function resolveParams($name): array
    {
        return [
            [
                'directory' => array_filter($this->getConfig('include', []), function ($dir) {
                    return is_dir($dir);
                }),
                'exclude'   => $this->getConfig('exclude', []),
                'name'      => $this->getConfig('name', []),
            ],
        ];
    }

    public function getDefaultDriver()
    {
        return $this->getConfig('type', 'scan');
    }
}
