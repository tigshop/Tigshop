<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

/**
 * @deprecated 5.0.0 Use PDO_MySQL or mysqli on top of the mysqlnd library, with runtime hook SWOOLE_HOOK_TCP or SWOOLE_HOOK_ALL turned on.
 * @not-serializable Objects of this class cannot be serialized.
 * @alias This class has an alias of "\Co\MySQL" when directive "swoole.use_shortname" is not explicitly turned off.
 * @see \Co\MySQL
 */
class MySQL
{
    public $serverInfo;

    public $sock = -1;

    public $connected = false;

    public $connect_errno = 0;

    public $connect_error = '';

    public $affected_rows = 0;

    public $insert_id = 0;

    public $error = '';

    public $errno = 0;

    /**
     * The socket object used by this MySQL client.
     *
     * @since 5.0.2
     */
    private ?Socket $socket;

    /**
     * @return mixed
     */
    public function getDefer()
    {
    }

    /**
     * @param mixed|null $defer
     * @return mixed
     */
    public function setDefer($defer = null)
    {
    }

    /**
     * @return mixed
     */
    public function connect(?array $server_config = null)
    {
    }

    /**
     * @param mixed $sql
     * @param mixed|null $timeout
     * @return mixed
     */
    public function query($sql, $timeout = null)
    {
    }

    /**
     * @return mixed
     */
    public function fetch()
    {
    }

    /**
     * @return mixed
     */
    public function fetchAll()
    {
    }

    /**
     * @return mixed
     */
    public function nextResult()
    {
    }

    /**
     * @param mixed $query
     * @param mixed|null $timeout
     * @return mixed
     */
    public function prepare($query, $timeout = null)
    {
    }

    /**
     * @return mixed
     */
    public function recv()
    {
    }

    /**
     * @param mixed|null $timeout
     * @return mixed
     */
    public function begin($timeout = null)
    {
    }

    /**
     * @param mixed|null $timeout
     * @return mixed
     */
    public function commit($timeout = null)
    {
    }

    /**
     * @param mixed|null $timeout
     * @return mixed
     */
    public function rollback($timeout = null)
    {
    }

    /**
     * Escape a string for use in a query.
     *
     * This method is available only when Swoole is installed with option "--enable-mysqlnd" included.
     *
     * @param string $string The string to be escaped.
     * @return string|false Returns the escaped string, or FALSE on error.
     */
    public function escape(string $string): string|false
    {
    }

    /**
     * @return mixed
     */
    public function close()
    {
    }
}
