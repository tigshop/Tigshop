<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole\Database;

/**
 * The proxy class for PHP class PDOStatement.
 *
 * @see https://www.php.net/PDOStatement The PDOStatement class
 */
class PDOStatementProxy extends ObjectProxy
{
    /** @var \PDOStatement */
    protected $__object;

    protected array $setAttributeContext = [];

    protected array $setFetchModeContext;

    protected array $bindParamContext = [];

    protected array $bindColumnContext = [];

    protected array $bindValueContext = [];

    protected PDOProxy $parent;

    /** @var int */
    protected $parentRound;

    public function __construct(\PDOStatement $object, PDOProxy $parent)
    {
        parent::__construct($object);
        $this->parent      = $parent;
        $this->parentRound = $parent->getRound();
    }

    public function __call(string $name, array $arguments)
    {
        try {
            $ret = $this->__object->{$name}(...$arguments);
        } catch (\PDOException $e) {
            if (!$this->parent->inTransaction() && DetectsLostConnections::causedByLostConnection($e)) {
                if ($this->parent->getRound() === $this->parentRound) {
                    /* if not equal, parent has reconnected */
                    $this->parent->reconnect();
                }
                $parent         = $this->parent->__getObject();
                $this->__object = $parent->prepare($this->__object->queryString);

                foreach ($this->setAttributeContext as $attribute => $value) {
                    $this->__object->setAttribute($attribute, $value);
                }
                if (!empty($this->setFetchModeContext)) {
                    $this->__object->setFetchMode(...$this->setFetchModeContext);
                }
                foreach ($this->bindParamContext as $param => $item) {
                    $this->__object->bindParam($param, ...$item);
                }
                foreach ($this->bindColumnContext as $column => $item) {
                    $this->__object->bindColumn($column, ...$item);
                }
                foreach ($this->bindValueContext as $value => $item) {
                    $this->__object->bindParam($value, ...$item);
                }
                $ret = $this->__object->{$name}(...$arguments);
            } else {
                throw $e;
            }
        }

        return $ret;
    }

    public function setAttribute(int $attribute, $value): bool
    {
        $this->setAttributeContext[$attribute] = $value;
        return $this->__object->setAttribute($attribute, $value);
    }

    /**
     * Set the default fetch mode for this statement.
     *
     * @see https://www.php.net/manual/en/pdostatement.setfetchmode.php
     */
    public function setFetchMode(int $mode, ...$params): bool
    {
        $this->setFetchModeContext = func_get_args();
        return $this->__object->setFetchMode(...$this->setFetchModeContext);
    }

    public function bindParam($parameter, &$variable, $data_type = \PDO::PARAM_STR, $length = 0, $driver_options = null): bool
    {
        $this->bindParamContext[$parameter] = [$variable, $data_type, $length, $driver_options];
        return $this->__object->bindParam($parameter, $variable, $data_type, $length, $driver_options);
    }

    public function bindColumn($column, &$param, $type = null, $maxlen = null, $driverdata = null): bool
    {
        $this->bindColumnContext[$column] = [$param, $type, $maxlen, $driverdata];
        return $this->__object->bindColumn($column, $param, $type, $maxlen, $driverdata);
    }

    public function bindValue($parameter, $value, $data_type = \PDO::PARAM_STR): bool
    {
        $this->bindValueContext[$parameter] = [$value, $data_type];
        return $this->__object->bindValue($parameter, $value, $data_type);
    }
}
