<?php

namespace think\swoole\pool;

use Smf\ConnectionPool\Connectors\ConnectorInterface;
use think\helper\Arr;

class Client implements ConnectorInterface
{

    /**
     * Connect to the specified Server and returns the connection resource
     * @param array $config
     * @return \Swoole\Coroutine\Client
     */
    public function connect(array $config)
    {
        $client = new \Swoole\Coroutine\Client(SWOOLE_SOCK_TCP);

        $host    = Arr::pull($config, 'host');
        $port    = Arr::pull($config, 'port');
        $timeout = Arr::pull($config, 'timeout', 5);

        $client->set($config);

        $client->connect($host, $port, $timeout);

        return $client;
    }

    /**
     * Disconnect and free resources
     * @param \Swoole\Coroutine\Client $connection
     * @return mixed
     */
    public function disconnect($connection)
    {
        $connection->close();
    }

    /**
     * Whether the connection is established
     * @param \Swoole\Coroutine\Client $connection
     * @return bool
     */
    public function isConnected($connection): bool
    {
        return $connection->isConnected() && $connection->peek() !== '';
    }

    /**
     * Reset the connection
     * @param \Swoole\Coroutine\Client $connection
     * @param array $config
     * @return mixed
     */
    public function reset($connection, array $config)
    {
    }

    /**
     * Validate the connection
     *
     * @param \Swoole\Coroutine\Client $connection
     * @return bool
     */
    public function validate($connection): bool
    {
        return $connection instanceof \Swoole\Coroutine\Client;
    }
}
