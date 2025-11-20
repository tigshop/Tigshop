<?php

namespace think\swoole\concerns;

use Swoole\Constant;
use Swoole\Coroutine;
use Swoole\Process;
use Swoole\Process\Pool;
use Swoole\Runtime;
use think\App;
use think\swoole\coroutine\Barrier;
use think\swoole\Ipc;
use think\swoole\message\ReloadMessage;
use think\swoole\Watcher;

/**
 * Trait InteractsWithServer
 * @package think\swoole\concerns
 * @property App $container
 */
trait InteractsWithServer
{

    /**
     * @var array
     */
    protected $startFuncMap = [];

    protected $workerId;

    /** @var Pool */
    protected $pool;

    /** @var Ipc */
    protected $ipc;

    public function addBatchWorker(int $workerNum, callable $func, $name = null)
    {
        for ($i = 0; $i < $workerNum; $i++) {
            $this->addWorker($func, $name ? "{$name} #{$i}" : null);
        }
        return $this;
    }

    public function addWorker(callable $func, $name = null): self
    {
        $this->startFuncMap[] = [$func, $name];
        return $this;
    }

    /**
     * 启动服务
     * @param string $envName 环境变量标识
     */
    public function start(string $envName): void
    {
        $this->setProcessName('manager process');

        //协程配置
        Coroutine::set($this->getConfig('coroutine', []));

        $this->initialize();
        $this->triggerEvent('init');

        //热更新
        if ($this->getConfig('hot_update.enable', false)) {
            $this->addHotUpdateProcess();
        }

        $workerNum = count($this->startFuncMap);

        $pool = $this->createPool($workerNum);

        $pool->on(Constant::EVENT_WORKER_START, function ($pool, $workerId) use ($envName) {

            Runtime::enableCoroutine();

            $this->pool     = $pool;
            $this->workerId = $workerId;

            [$func, $name] = $this->startFuncMap[$workerId];

            if ($name) {
                $this->setProcessName($name);
            }

            $this->ipc->listenMessage($workerId);

            Process::signal(SIGTERM, function () {
                $this->stopWorker();
            });

            $this->onEvent('message', function ($message) {
                if ($message instanceof ReloadMessage) {
                    $this->stopWorker();
                }
            });

            $this->clearCache();
            $this->prepareApplication($envName);

            $this->triggerEvent(Constant::EVENT_WORKER_START, $name);

            $func($pool, $workerId);
        });

        $pool->start();
    }

    protected function stopWorker()
    {
        $this->triggerEvent('beforeWorkerStop');
        $this->pool->getProcess()->exit();
    }

    public function getWorkerId()
    {
        return $this->workerId;
    }

    /**
     * 获取当前工作进程池对象
     * @return Pool
     */
    public function getPool()
    {
        return $this->pool;
    }

    public function sendMessage($workerId, $message)
    {
        $this->ipc->sendMessage($workerId, $message);
    }

    protected function createPool($workerNum)
    {
        $this->ipc = $this->container->make(Ipc::class);

        $pool = new Pool($workerNum, $this->ipc->getType(), 0, true);

        $this->ipc->prepare($pool);

        return $pool;
    }

    public function runWithBarrier(callable $func, ...$params)
    {
        Barrier::run($func, ...$params);
    }

    /**
     * 热更新
     */
    protected function addHotUpdateProcess()
    {
        //热更新时关闭协程死锁检查
        Coroutine::set([
            'enable_deadlock_check' => false,
        ]);

        $this->addWorker(function () {
            $watcher = $this->container->make(Watcher::class);
            $watcher->watch(function () {
                foreach ($this->startFuncMap as $workerId => $func) {
                    if ($workerId != $this->workerId) {
                        $this->sendMessage($workerId, new ReloadMessage);
                    }
                }
            });
        }, 'hot update');
    }

    /**
     * 清除apc、op缓存
     */
    protected function clearCache()
    {
        if (extension_loaded('apc')) {
            apc_clear_cache();
        }

        if (extension_loaded('Zend OPcache')) {
            opcache_reset();
        }
    }

    /**
     * Set process name.
     *
     * @param $process
     */
    protected function setProcessName($process)
    {
        $appName = $this->container->config->get('app.name', 'ThinkPHP');

        $name = sprintf('swoole: %s process for %s', $process, $appName);

        @cli_set_process_title($name);
    }
}
