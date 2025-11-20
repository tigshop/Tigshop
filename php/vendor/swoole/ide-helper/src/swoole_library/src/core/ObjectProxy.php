<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole;

class ObjectProxy
{
    /** @var object */
    protected $__object;

    public function __construct(object $object)
    {
        $this->__object = $object;
    }

    public function __getObject()
    {
        return $this->__object;
    }

    public function __get(string $name)
    {
        return $this->__object->{$name};
    }

    public function __set(string $name, $value): void
    {
        $this->__object->{$name} = $value;
    }

    public function __isset($name)
    {
        return isset($this->__object->{$name});
    }

    public function __unset(string $name): void
    {
        unset($this->__object->{$name});
    }

    public function __call(string $name, array $arguments)
    {
        return $this->__object->{$name}(...$arguments);
    }

    public function __invoke(...$arguments)
    {
        /** @var mixed $object */
        $object = $this->__object;
        return $object(...$arguments);
    }
}
