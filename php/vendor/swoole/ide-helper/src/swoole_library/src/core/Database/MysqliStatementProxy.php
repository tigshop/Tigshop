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

use mysqli;
use mysqli_stmt;

class MysqliStatementProxy extends ObjectProxy
{
    public const IO_METHOD_REGEX = '/^close|execute|fetch|prepare$/i';

    /** @var mysqli_stmt */
    protected $__object;

    /** @var null|string */
    protected $queryString;

    /** @var null|array */
    protected $attrSetContext;

    /** @var null|array */
    protected $bindParamContext;

    /** @var null|array */
    protected $bindResultContext;

    /** @var Mysqli|MysqliProxy */
    protected $parent;

    /** @var int */
    protected $parentRound;

    public function __construct(mysqli_stmt $object, ?string $queryString, MysqliProxy $parent)
    {
        parent::__construct($object);
        $this->queryString = $queryString;
        $this->parent = $parent;
        $this->parentRound = $parent->getRound();
    }

    public function __call(string $name, array $arguments)
    {
        for ($n = 3; $n--;) {
            $ret = @$this->__object->{$name}(...$arguments);
            if ($ret === false) {
                /* non-IO method */
                if (!preg_match(static::IO_METHOD_REGEX, $name)) {
                    break;
                }
                /* no more chances or non-IO failures or in transaction */
                if (!in_array($this->__object->errno, $this->parent::IO_ERRORS, true) || ($n === 0)) {
                    throw new MysqliException($this->__object->error, $this->__object->errno);
                }
                if ($this->parent->getRound() === $this->parentRound) {
                    /* if not equal, parent has reconnected */
                    $this->parent->reconnect();
                }
                $parent = $this->parent->__getObject();
                $this->__object = $this->queryString ? @$parent->prepare($this->queryString) : @$parent->stmt_init();
                if ($this->__object === false) {
                    throw new MysqliException($parent->error, $parent->errno);
                }
                if ($this->bindParamContext) {
                    $this->__object->bind_param($this->bindParamContext[0], ...$this->bindParamContext[1]);
                }
                if ($this->bindResultContext) {
                    $this->__object->bind_result($this->bindResultContext);
                }
                if ($this->attrSetContext) {
                    foreach ($this->attrSetContext as $attr => $value) {
                        $this->__object->attr_set($attr, $value);
                    }
                }
                continue;
            }
            if (strcasecmp($name, 'prepare') === 0) {
                $this->queryString = $arguments[0];
            }
            break;
        }
        /* @noinspection PhpUndefinedVariableInspection */
        return $ret;
    }

    public function attr_set($attr, $mode): bool
    {
        $this->attrSetContext[$attr] = $mode;
        return $this->__object->attr_set($attr, $mode);
    }

    public function bind_param($types, &...$arguments): bool
    {
        $this->bindParamContext = [$types, $arguments];
        return $this->__object->bind_param($types, ...$arguments);
    }

    public function bind_result(&...$arguments): bool
    {
        $this->bindResultContext = $arguments;
        return $this->__object->bind_result(...$arguments);
    }
}
