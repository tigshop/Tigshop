<?php

namespace think\swoole\watcher\driver;

use InvalidArgumentException;
use Swoole\Coroutine\System;
use Symfony\Component\Finder\Glob;
use Symfony\Component\Process\Process;
use think\swoole\watcher\Driver;
use Throwable;

class Fswatch extends Driver
{
    protected $directory;
    protected $matchRegexps = [];
    /** @var Process */
    protected $process;

    public function __construct($config)
    {
        $ret = System::exec('which fswatch');
        if (empty($ret['output'])) {
            throw new InvalidArgumentException('which not exists.');
        }

        $this->directory = $config['directory'];

        if (!empty($config['name'])) {
            foreach ($config['name'] as $value) {
                $this->matchRegexps[] = Glob::toRegex($value);
            }
        }
    }

    public function watch(callable $callback)
    {
        $command       = $this->getCommand();
        $this->process = new Process($command, timeout: 0);
        try {
            $this->process->run(function ($type, $data) use ($callback) {
                $files = array_unique(array_filter(explode("\n", $data)));
                if (!empty($this->matchRegexps)) {
                    $files = array_filter($files, function ($file) {
                        $filename = basename($file);
                        foreach ($this->matchRegexps as $regex) {
                            if (preg_match($regex, $filename)) {
                                return true;
                            }
                        }
                        return false;
                    });
                }
                if (!empty($files)) {
                    $callback($files);
                }
            });
        } catch (Throwable) {

        }
    }

    protected function getCommand()
    {
        $command = ["fswatch", "--format=%p", '-r', '--event=Created', '--event=Updated', '--event=Removed', '--event=Renamed'];

        return [...$command, ...$this->directory];
    }

    public function stop()
    {
        if ($this->process) {
            $this->process->stop();
        }
    }
}
