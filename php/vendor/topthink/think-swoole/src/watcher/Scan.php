<?php

namespace think\swoole\watcher;

use Swoole\Timer;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class Scan implements Driver
{
    protected $finder;

    protected $files = [];

    public function __construct($directory, $exclude, $name)
    {
        $this->finder = new Finder();
        $this->finder
            ->files()
            ->name($name)
            ->in($directory)
            ->exclude($exclude);
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

        Timer::tick(2000, function () use ($callback) {

            $files = $this->findFiles();

            foreach ($files as $path => $time) {
                if (empty($this->files[$path]) || $this->files[$path] != $time) {
                    call_user_func($callback);
                    break;
                }
            }

            $this->files = $files;
        });
    }
}
