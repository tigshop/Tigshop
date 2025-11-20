<?php

declare(strict_types=1);

namespace Swoole\Coroutine\MySQL;

/**
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0. For details, please check comments in class \Swoole\Coroutine\MySQL.
 * @not-serializable Objects of this class cannot be serialized.
 * @alias This class has an alias of "\Co\MySQL\Statement" when directive "swoole.use_shortname" is not explicitly turned off.
 * @see \Co\MySQL\Statement
 */
class Statement
{
    public $id = 0;

    public $affected_rows = 0;

    public $insert_id = 0;

    public $error = '';

    public $errno = 0;

    /**
     * @param mixed|null $params
     * @param mixed|null $timeout
     * @return mixed
     */
    public function execute($params = null, $timeout = null)
    {
    }

    /**
     * @param mixed|null $timeout
     * @return mixed
     */
    public function fetch($timeout = null)
    {
    }

    /**
     * @param mixed|null $timeout
     * @return mixed
     */
    public function fetchAll($timeout = null)
    {
    }

    /**
     * @param mixed|null $timeout
     * @return mixed
     */
    public function nextResult($timeout = null)
    {
    }

    /**
     * @param mixed|null $timeout
     * @return mixed
     */
    public function recv($timeout = null)
    {
    }

    /**
     * @return mixed
     */
    public function close()
    {
    }
}
