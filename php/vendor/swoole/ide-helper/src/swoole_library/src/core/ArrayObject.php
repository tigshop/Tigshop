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

use ArrayAccess;
use Countable;
use Iterator;
use RuntimeException;
use Serializable;
use Swoole\Exception\ArrayKeyNotExists;

class ArrayObject implements ArrayAccess, Serializable, Countable, Iterator
{
    /**
     * @var array
     */
    protected $array;

    /**
     * ArrayObject constructor.
     */
    public function __construct(array $array = [])
    {
        $this->array = $array;
    }

    public function __toArray(): array
    {
        return $this->array;
    }

    public function __serialize(): array
    {
        return $this->array;
    }

    public function __unserialize(array $data): void
    {
        $this->array = $data;
    }

    public function toArray(): array
    {
        return $this->array;
    }

    public function isEmpty(): bool
    {
        return empty($this->array);
    }

    public function count(): int
    {
        return count($this->array);
    }

    /**
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
        return current($this->array);
    }

    /**
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
        return key($this->array);
    }

    public function valid(): bool
    {
        return array_key_exists($this->key(), $this->array);
    }

    /**
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function rewind()
    {
        return reset($this->array);
    }

    /**
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function next()
    {
        return next($this->array);
    }

    /**
     * @param mixed $key
     * @return ArrayObject|StringObject
     */
    public function get($key)
    {
        if (!$this->exists($key)) {
            throw new ArrayKeyNotExists($key);
        }
        return static::detectType($this->array[$key]);
    }

    /**
     * @param mixed $key
     * @param mixed $default
     * @return ArrayObject|StringObject
     */
    public function getOr($key, $default = null)
    {
        if (!$this->exists($key)) {
            return $default;
        }
        return static::detectType($this->array[$key]);
    }

    /**
     * @return mixed
     */
    public function last()
    {
        $key = array_key_last($this->array);
        if ($key === null) {
            return null;
        }
        return $this->get($key);
    }

    /**
     * @return null|int|string
     */
    public function firstKey()
    {
        return array_key_first($this->array);
    }

    /**
     * @return null|int|string
     */
    public function lastKey()
    {
        return array_key_last($this->array);
    }

    /**
     * @return mixed
     */
    public function first()
    {
        $key = array_key_first($this->array);
        if ($key === null) {
            return null;
        }
        return $this->get($key);
    }

    /**
     * @param mixed $key
     * @param mixed $value
     * @return $this
     */
    public function set($key, $value): self
    {
        $this->array[$key] = $value;
        return $this;
    }

    /**
     * @param mixed $key
     * @return $this
     */
    public function delete($key): self
    {
        unset($this->array[$key]);
        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function remove($value, bool $strict = true, bool $loop = false): self
    {
        do {
            $key = $this->search($value, $strict);
            if ($key === false) {
                break;
            }
            unset($this->array[$key]);
        } while ($loop);

        return $this;
    }

    /**
     * @return $this
     */
    public function clear(): self
    {
        $this->array = [];
        return $this;
    }

    /**
     * @param mixed $key
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($key)
    {
        if (!array_key_exists($key, $this->array)) {
            return null;
        }
        return $this->array[$key];
    }

    /**
     * @param mixed $key
     * @param mixed $value
     */
    public function offsetSet($key, $value): void
    {
        $this->array[$key] = $value;
    }

    /**
     * @param mixed $key
     */
    public function offsetUnset($key): void
    {
        unset($this->array[$key]);
    }

    /**
     * @param mixed $key
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($key)
    {
        return isset($this->array[$key]);
    }

    /**
     * @param mixed $key
     */
    public function exists($key): bool
    {
        return array_key_exists($key, $this->array);
    }

    /**
     * @param mixed $value
     */
    public function contains($value, bool $strict = true): bool
    {
        return in_array($value, $this->array, $strict);
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    public function indexOf($value, bool $strict = true)
    {
        return $this->search($value, $strict);
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    public function lastIndexOf($value, bool $strict = true)
    {
        $array = $this->array;
        for (end($array); ($currentKey = key($array)) !== null; prev($array)) {
            $currentValue = current($array);
            if ($currentValue == $value) {
                if ($strict && $currentValue !== $value) {
                    continue;
                }
                break;
            }
        }
        return $currentKey;
    }

    /**
     * @param mixed $needle
     * @return mixed
     */
    public function search($needle, bool $strict = true)
    {
        return array_search($needle, $this->array, $strict);
    }

    public function join(string $glue = ''): StringObject
    {
        return static::detectStringType(implode($glue, $this->array));
    }

    public function serialize(): StringObject
    {
        return static::detectStringType(serialize($this->array));
    }

    /**
     * @param string $string
     * @return $this
     */
    public function unserialize($string): self
    {
        $this->array = (array) unserialize((string) $string);
        return $this;
    }

    /**
     * @return float|int
     */
    public function sum()
    {
        return array_sum($this->array);
    }

    /**
     * @return float|int
     */
    public function product()
    {
        return array_product($this->array);
    }

    /**
     * @param mixed $value
     * @return int
     */
    public function push($value)
    {
        return $this->pushBack($value);
    }

    /**
     * @param mixed $value
     * @return int
     */
    public function pushFront($value)
    {
        return array_unshift($this->array, $value);
    }

    public function append(...$values): ArrayObject
    {
        array_push($this->array, ...$values);
        return $this;
    }

    /**
     * @param mixed $value
     * @return int
     */
    public function pushBack($value)
    {
        return array_push($this->array, $value);
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function insert(int $offset, $value): self
    {
        if (is_array($value) || is_object($value) || is_null($value)) {
            $value = [$value];
        }
        array_splice($this->array, $offset, 0, $value);
        return $this;
    }

    /**
     * @return mixed
     */
    public function pop()
    {
        return $this->popBack();
    }

    /**
     * @return mixed
     */
    public function popFront()
    {
        return array_shift($this->array);
    }

    /**
     * @return mixed
     */
    public function popBack()
    {
        return array_pop($this->array);
    }

    /**
     * @param mixed $offset
     * @param int $length
     * @return static
     */
    public function slice($offset, int $length = null, bool $preserve_keys = false): self
    {
        return new static(array_slice($this->array, ...func_get_args()));
    }

    /**
     * @return ArrayObject|mixed|StringObject
     */
    public function randomGet()
    {
        return static::detectType($this->array[array_rand($this->array, 1)]);
    }

    /**
     * @return $this
     */
    public function each(callable $fn): self
    {
        if (array_walk($this->array, $fn) === false) {
            throw new RuntimeException('array_walk() failed');
        }
        return $this;
    }

    /**
     * @param array $args
     * @return static
     */
    public function map(callable $fn, ...$args): self
    {
        return new static(array_map($fn, $this->array, ...$args));
    }

    /**
     * @param null $initial
     * @return mixed
     */
    public function reduce(callable $fn, $initial = null)
    {
        return array_reduce($this->array, $fn, $initial);
    }

    /**
     * @param array $args
     * @return static
     */
    public function keys(...$args): self
    {
        return new static(array_keys($this->array, ...$args));
    }

    /**
     * @return static
     */
    public function values(): self
    {
        return new static(array_values($this->array));
    }

    /**
     * @param mixed $column_key
     * @param mixed $index
     * @return static
     */
    public function column($column_key, $index = null): self
    {
        return new static(array_column($this->array, $column_key, $index));
    }

    /**
     * @return static
     */
    public function unique(int $sort_flags = SORT_STRING): self
    {
        return new static(array_unique($this->array, $sort_flags));
    }

    /**
     * @return static
     */
    public function reverse(bool $preserve_keys = false): self
    {
        return new static(array_reverse($this->array, $preserve_keys));
    }

    /**
     * @return static
     */
    public function chunk(int $size, bool $preserve_keys = false): self
    {
        return new static(array_chunk($this->array, $size, $preserve_keys));
    }

    /**
     * Swap keys and values in an array.
     * @return static
     */
    public function flip(): self
    {
        return new static(array_flip($this->array));
    }

    /**
     * @return static
     */
    public function filter(callable $fn, int $flag = 0): self
    {
        return new static(array_filter($this->array, $fn, $flag));
    }

    /**
     * | Function name     | Sorts by | Maintains key association   | Order of sort               | Related functions |
     * | :---------------- | :------- | :-------------------------- | :-------------------------- | :---------------- |
     * | array_multisort() | value    | associative yes, numeric no | first array or sort options  | array_walk()      |
     * | asort()           | value    | yes                         | low to high                 | arsort()          |
     * | arsort()          | value    | yes                         | high to low                 | asort()           |
     * | krsort()          | key      | yes                         | high to low                 | ksort()           |
     * | ksort()           | key      | yes                         | low to high                 | asort()           |
     * | natcasesort()     | value    | yes                         | natural, case insensitive   | natsort()         |
     * | natsort()         | value    | yes                         | natural                     | natcasesort()     |
     * | rsort()           | value    | no                          | high to low                 | sort()            |
     * | shuffle()          | value    | no                          | random                      | array_rand()      |
     * | sort()            | value    | no                          | low to high                 | rsort()           |
     * | uasort()          | value    | yes                         | user defined                 | uksort()          |
     * | uksort()          | key      | yes                         | user defined                 | uasort()          |
     * | usort()           | value    | no                          | user defined                 | uasort()          |
     */

    /**
     * @return $this
     */
    public function asort(int $sort_flags = SORT_REGULAR): self
    {
        if (asort($this->array, $sort_flags) !== true) {
            throw new RuntimeException('asort() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function arsort(int $sort_flags = SORT_REGULAR): self
    {
        if (arsort($this->array, $sort_flags) !== true) {
            throw new RuntimeException('arsort() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function krsort(int $sort_flags = SORT_REGULAR): self
    {
        if (krsort($this->array, $sort_flags) !== true) {
            throw new RuntimeException('krsort() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function ksort(int $sort_flags = SORT_REGULAR): self
    {
        if (ksort($this->array, $sort_flags) !== true) {
            throw new RuntimeException('ksort() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function natcasesort(): self
    {
        if (natcasesort($this->array) !== true) {
            throw new RuntimeException('natcasesort() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function natsort(): self
    {
        if (natsort($this->array) !== true) {
            throw new RuntimeException('natsort() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function rsort(int $sort_flags = SORT_REGULAR): self
    {
        if (rsort($this->array, $sort_flags) !== true) {
            throw new RuntimeException('rsort() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function shuffle(): self
    {
        if (shuffle($this->array) !== true) {
            throw new RuntimeException('shuffle() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function sort(int $sort_flags = SORT_REGULAR): self
    {
        if (sort($this->array, $sort_flags) !== true) {
            throw new RuntimeException('sort() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function uasort(callable $value_compare_func): self
    {
        if (uasort($this->array, $value_compare_func) !== true) {
            throw new RuntimeException('uasort() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function uksort(callable $value_compare_func): self
    {
        if (uksort($this->array, $value_compare_func) !== true) {
            throw new RuntimeException('uksort() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function usort(callable $value_compare_func): self
    {
        if (usort($this->array, $value_compare_func) !== true) {
            throw new RuntimeException('usort() failed');
        }
        return $this;
    }

    /**
     * @param mixed $value
     * @return ArrayObject|mixed|StringObject
     */
    protected static function detectType($value)
    {
        if (is_string($value)) {
            return static::detectStringType($value);
        }
        if (is_array($value)) {
            return static::detectArrayType($value);
        }
        return $value;
    }

    protected static function detectStringType(string $value): StringObject
    {
        return new StringObject($value);
    }

    /**
     * @return static
     */
    protected static function detectArrayType(array $value): self
    {
        return new static($value);
    }
}
