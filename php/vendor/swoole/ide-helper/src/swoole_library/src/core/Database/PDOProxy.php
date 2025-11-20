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
 * @method \PDO __getObject()
 */
class PDOProxy extends ObjectProxy
{
    /** @var \PDO */
    protected $__object;

    protected array $setAttributeContext = [];

    /** @var callable */
    protected $constructor;

    protected int $round = 0;

    protected int $inTransaction = 0;

    public function __construct(callable $constructor)
    {
        parent::__construct($constructor());
        $this->__object->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->constructor = $constructor;
    }

    public function __call(string $name, array $arguments)
    {
        try {
            $ret = $this->__object->{$name}(...$arguments);
        } catch (\PDOException $e) {
            if (!$this->__object->inTransaction() && DetectsLostConnections::causedByLostConnection($e)) {
                $this->reconnect();
                $ret = $this->__object->{$name}(...$arguments);
            } else {
                throw $e;
            }
        }

        if (strcasecmp($name, 'beginTransaction') === 0) {
            $this->inTransaction++;
        }

        if ((strcasecmp($name, 'commit') === 0 || strcasecmp($name, 'rollback') === 0) && $this->inTransaction > 0) {
            $this->inTransaction--;
        }

        if ((strcasecmp($name, 'prepare') === 0) || (strcasecmp($name, 'query') === 0)) {
            $ret = new PDOStatementProxy($ret, $this);
        }

        return $ret;
    }

    public function getRound(): int
    {
        return $this->round;
    }

    public function reconnect(): void
    {
        $constructor = $this->constructor;
        parent::__construct($constructor());
        $this->__object->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->round++;
        /* restore context */
        foreach ($this->setAttributeContext as $attribute => $value) {
            $this->__object->setAttribute($attribute, $value);
        }
    }

    public function setAttribute(int $attribute, $value): bool
    {
        $this->setAttributeContext[$attribute] = $value;
        return $this->__object->setAttribute($attribute, $value);
    }

    public function inTransaction(): bool
    {
        return $this->inTransaction > 0;
    }

    public function reset(): void
    {
        $this->inTransaction = 0;
    }
}
