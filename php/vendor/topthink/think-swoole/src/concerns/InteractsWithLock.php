<?php

namespace think\swoole\concerns;

use think\App;
use think\swoole\Lock;

/**
 * Trait InteractsWithLock
 * @package think\swoole\concerns
 *
 * @property App $app
 * @property App $container
 */
trait InteractsWithLock
{
    /**
     * @var Lock
     */
    protected $lock;

    protected function prepareLock()
    {
        if ($this->getConfig('lock.enable', false)) {
            $this->lock = $this->container->make(Lock::class);
            $this->lock->prepare();

            $this->onEvent('workerStart', function () {
                $this->app->instance(Lock::class, $this->lock);
            });
        }
    }
}
