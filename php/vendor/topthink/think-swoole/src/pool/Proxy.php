<?php

namespace think\swoole\pool;

use Closure;
use Exception;
use RuntimeException;
use Smf\ConnectionPool\ConnectionPool;
use Smf\ConnectionPool\Connectors\ConnectorInterface;
use Swoole\Coroutine;
use think\swoole\coroutine\Context;
use think\swoole\Pool;
use Throwable;
use WeakMap;

abstract class Proxy
{

    /** @var WeakMap */
    protected $released;

    /** @var WeakMap */
    protected $disconnected;

    /** @var ConnectionPool */
    protected $pool;

    /**
     * Proxy constructor.
     * @param Closure|ConnectorInterface $connector
     * @param array $config
     */
    public function __construct($connector, $config, array $connectionConfig = [])
    {
        $this->released     = new WeakMap();
        $this->disconnected = new WeakMap();

        if ($connector instanceof Closure) {
            $connector = new Connector($connector);
        }

        $connector->setChecker(function ($connection) {
            return !isset($this->disconnected[$connection]);
        });

        $this->pool = new ConnectionPool(
            Pool::pullPoolConfig($config),
            $connector,
            $connectionConfig
        );

        $this->pool->init();
    }

    protected function getPoolConnection()
    {
        return Context::rememberData('connection.' . spl_object_id($this), function () {
            $connection = $this->pool->borrow();

            $this->released[$connection] = false;

            Coroutine::defer(function () use ($connection) {
                //自动释放
                $this->releaseConnection($connection);
            });

            return $connection;
        });
    }

    protected function releaseConnection($connection)
    {
        if ($this->released[$connection] ?? false) {
            return;
        }
        $this->released[$connection] = true;
        $this->pool->return($connection);
    }

    public function release()
    {
        $connection = $this->getPoolConnection();
        $this->releaseConnection($connection);
    }

    public function __call($method, $arguments)
    {
        $connection = $this->getPoolConnection();
        if ($this->released[$connection] ?? false) {
            throw new RuntimeException('Connection already has been released!');
        }

        try {
            return $connection->{$method}(...$arguments);
        } catch (Exception|Throwable $e) {
            $this->disconnected[$connection] = true;
            throw $e;
        }
    }

}
