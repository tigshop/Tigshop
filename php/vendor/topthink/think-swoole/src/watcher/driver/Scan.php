<?php

namespace think\swoole\watcher\driver;

use Swoole\Timer;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use think\swoole\watcher\Driver;

class Scan extends Driver
{
    protected $finder;
    protected $files = [];
    protected $timer = null;

    public function __construct($config)
    {
        $this->finder = new Finder();
        $this->finder
            ->files()
            ->name($config['name'])
            ->in($config['directory'])
            ->exclude($config['exclude']);
    }

    protected function findFiles()
    {
        $files = [];
        /** @var SplFileInfo $f */
        foreach ($this->finder as $f) {
            $files[$f->getRealpath()] = $f->getMTime();
        }
        return $files;
    }

    public function watch(callable $callback)
    {
        $this->files = $this->findFiles();

        $this->timer = Timer::tick(2000, function () use ($callback) {

            $files = $this->findFiles();

            foreach ($files as $path => $time) {
                if (empty($this->files[$path]) || $this->files[$path] != $time) {
                    call_user_func($callback, [$path]);
                    break;
                }
            }

            $this->files = $files;
        });
    }

    public function stop()
    {
        if ($this->timer) {
            Timer::clear($this->timer);
        }
    }
}
