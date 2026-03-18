<?php

namespace think\swoole\websocket\room;

use InvalidArgumentException;
use Redis as PHPRedis;
use Smf\ConnectionPool\ConnectionPool;
use Smf\ConnectionPool\Connectors\PhpRedisConnector;
use think\helper\Arr;
use think\swoole\contract\websocket\RoomInterface;
use think\swoole\Manager;
use think\swoole\Pool;

/**
 * Class RedisRoom
 */
class Redis implements RoomInterface
{
    /**
     * @var array
     */
    protected $config;

    /**
     * @var string
     */
    protected $prefix = 'swoole:room:';

    /** @var Manager */
    protected $manager;

    /** @var ConnectionPool */
    protected $pool;

    /**
     * RedisRoom constructor.
     *
     * @param Manager $manager
     * @param array $config
     */
    public function __construct(Manager $manager, array $config)
    {
        $this->manager = $manager;
        $this->config  = $config;

        if ($prefix = Arr::get($this->config, 'prefix')) {
            $this->prefix = $prefix;
        }
    }

    /**
     * @return RoomInterface
     */
    public function prepare(): RoomInterface
    {
        $this->initData();
        $this->prepareRedis();
        return $this;
    }

    protected function prepareRedis()
    {
        $this->manager->onEvent('workerStart', function () {
            $config     = $this->config;
            $this->pool = new ConnectionPool(
                Pool::pullPoolConfig($config),
                new PhpRedisConnector(),
                $config
            );
            $this->manager->getPools()->add('websocket.room', $this->pool);
        });
    }

    protected function initData()
    {
        $connector = new PhpRedisConnector();

        $connection = $connector->connect($this->config);

        if (count($keys = $connection->keys("{$this->prefix}*"))) {
            $connection->del($keys);
        }

        $connector->disconnect($connection);
    }

    /**
     * Add multiple socket fds to a room.
     *
     * @param string $fd
     * @param array|string $roomNames
     */
    public function add($fd, $roomNames)
    {
        $rooms = is_array($roomNames) ? $roomNames : [$roomNames];

        $this->addValue($fd, $rooms, RoomInterface::DESCRIPTORS_KEY);

        foreach ($rooms as $room) {
            $this->addValue($room, [$fd], RoomInterface::ROOMS_KEY);
        }
    }

    /**
     * Delete multiple socket fds from a room.
     *
     * @param string fd
     * @param array|string rooms
     */
    public function delete($fd, $rooms)
    {
        $rooms = is_array($rooms) ? $rooms : [$rooms];
        $rooms = count($rooms) ? $rooms : $this->getRooms($fd);

        $this->removeValue($fd, $rooms, RoomInterface::DESCRIPTORS_KEY);

        foreach ($rooms as $room) {
            $this->removeValue($room, [$fd], RoomInterface::ROOMS_KEY);
        }
    }

    protected function runWithRedis(\Closure $callable)
    {
        $redis = $this->pool->borrow();
        try {
            return $callable($redis);
        } finally {
            $this->pool->return($redis);
        }
    }

    /**
     * Add value to redis.
     *
     * @param        $key
     * @param array $values
     * @param string $table
     *
     * @return $this
     */
    protected function addValue($key, array $values, string $table)
    {
        $this->checkTable($table);
        $redisKey = $this->getKey($key, $table);

        $this->runWithRedis(function (PHPRedis $redis) use ($redisKey, $values) {
            $pipe = $redis->multi(PHPRedis::PIPELINE);

            foreach ($values as $value) {
                $pipe->sadd($redisKey, $value);
            }

            $pipe->exec();
        });

        return $this;
    }

    /**
     * Remove value from redis.
     *
     * @param        $key
     * @param array $values
     * @param string $table
     *
     * @return $this
     */
    protected function removeValue($key, array $values, string $table)
    {
        $this->checkTable($table);
        $redisKey = $this->getKey($key, $table);

        $this->runWithRedis(function (PHPRedis $redis) use ($redisKey, $values) {
            $pipe = $redis->multi(PHPRedis::PIPELINE);
            foreach ($values as $value) {
                $pipe->srem($redisKey, $value);
            }
            $pipe->exec();
        });

        return $this;
    }

    /**
     * Get all sockets by a room key.
     *
     * @param string room
     *
     * @return array
     */
    public function getClients(string $room)
    {
        return $this->getValue($room, RoomInterface::ROOMS_KEY) ?? [];
    }

    /**
     * Get all rooms by a fd.
     *
     * @param string fd
     *
     * @return array
     */
    public function getRooms($fd)
    {
        return $this->getValue($fd, RoomInterface::DESCRIPTORS_KEY) ?? [];
    }

    /**
     * Check table for rooms and descriptors.
     *
     * @param string $table
     */
    protected function checkTable(string $table)
    {
        if (!in_array($table, [RoomInterface::ROOMS_KEY, RoomInterface::DESCRIPTORS_KEY])) {
            throw new InvalidArgumentException("Invalid table name: `{$table}`.");
        }
    }

    /**
     * Get value.
     *
     * @param string $key
     * @param string $table
     *
     * @return array
     */
    protected function getValue(string $key, string $table)
    {
        $this->checkTable($table);

        return $this->runWithRedis(function (PHPRedis $redis) use ($table, $key) {
            return $redis->smembers($this->getKey($key, $table));
        });
    }

    /**
     * Get key.
     *
     * @param string $key
     * @param string $table
     *
     * @return string
     */
    protected function getKey(string $key, string $table)
    {
        return "{$this->prefix}{$table}:{$key}";
    }

}
