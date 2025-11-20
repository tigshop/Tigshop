<?php

declare(strict_types=1);

namespace Swoole\Redis;

/**
 * @not-serializable Objects of this class cannot be serialized.
 */
class Server extends \Swoole\Server
{
    /**
     * To return an ERR reply from the Redis server.
     *
     * @see \Swoole\Redis\Server::format()
     */
    public const ERROR = 0;

    /**
     * To return a NULL reply from the Redis server.
     *
     * When used as the 1st parameter "$type" in method \Swoole\Redis\Server::format(), there is no need to pass in the
     * 2nd parameter "$value".
     *
     * @see \Swoole\Redis\Server::format()
     */
    public const NIL = 1;

    /**
     * To return a Status reply from the Redis server.
     *
     * @see \Swoole\Redis\Server::format()
     */
    public const STATUS = 2;

    /**
     * To return an Integer reply from the Redis server.
     *
     * When used as the 1st parameter "$type" in method \Swoole\Redis\Server::format(), the 2nd parameter "$value" must
     * be an integer.
     *
     * @see \Swoole\Redis\Server::format()
     */
    public const INT = 3;

    /**
     * To return a String reply from the Redis server.
     *
     * When used as the 1st parameter "$type" in method \Swoole\Redis\Server::format(), the 2nd parameter "$value" must
     * be a string.
     *
     * @see \Swoole\Redis\Server::format()
     */
    public const STRING = 4;

    /**
     * To return a Set reply from the Redis server.
     *
     * When used as the 1st parameter "$type" in method \Swoole\Redis\Server::format(), the 2nd parameter "$value" must
     * be an array.
     *
     * @see \Swoole\Redis\Server::format()
     */
    public const SET = 5;

    /**
     * To return a Map reply from the Redis server.
     *
     * When used as the 1st parameter "$type" in method \Swoole\Redis\Server::format(), the 2nd parameter "$value" must
     * be an associative array.
     *
     * @see \Swoole\Redis\Server::format()
     */
    public const MAP = 6;

    /**
     * Set a handler (a callback function) to process a given Redis command.
     *
     * @return bool TRUE on success, or FALSE on failure.
     */
    public function setHandler(string $command, callable $callback): bool
    {
    }

    /**
     * @return callable|null Returns the callback function if defined, otherwise NULL.
     */
    public function getHandler(string $command): ?callable
    {
    }

    /**
     * Format a reply.
     *
     * @param int $type The type of the reply. It can be one of the following seven constants:
     *                  - \Swoole\Redis\Server::ERROR
     *                  - \Swoole\Redis\Server::NIL
     *                  - \Swoole\Redis\Server::STATUS
     *                  - \Swoole\Redis\Server::INT
     *                  - \Swoole\Redis\Server::STRING
     *                  - \Swoole\Redis\Server::SET
     *                  - \Swoole\Redis\Server::MAP
     */
    public static function format(int $type, mixed $value = null): string|false
    {
    }
}
