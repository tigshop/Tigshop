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

use Swoole\Exception\ArrayKeyNotExists;

class ArrayObject implements \ArrayAccess, \Serializable, \Countable, \Iterator
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

    public static function from(array $array = []): static
    {
        return new static($array); // @phpstan-ignore new.static
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
     * @return ArrayObject|StringObject
     */
    public function get(mixed $key)
    {
        if (!$this->exists($key)) {
            throw new ArrayKeyNotExists($key);
        }
        return static::detectType($this->array[$key]);
    }

    /**
     * @return ArrayObject|StringObject
     */
    public function getOr(mixed $key, mixed $default = null)
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
     * @return int|string|null
     */
    public function firstKey()
    {
        return array_key_first($this->array);
    }

    /**
     * @return int|string|null
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
     * @return $this
     */
    public function set(mixed $key, mixed $value): self
    {
        $this->array[$key] = $value;
        return $this;
    }

    /**
     * @return $this
     */
    public function delete(mixed $key): self
    {
        unset($this->array[$key]);
        return $this;
    }

    /**
     * @return $this
     */
    public function remove(mixed $value, bool $strict = true, bool $loop = false): self
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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $key)
    {
        if (!array_key_exists($key, $this->array)) {
            return null;
        }
        return $this->array[$key];
    }

    public function offsetSet(mixed $key, mixed $value): void
    {
        $this->array[$key] = $value;
    }

    public function offsetUnset(mixed $key): void
    {
        unset($this->array[$key]);
    }

    /**
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function offsetExists(mixed $key)
    {
        return isset($this->array[$key]);
    }

    public function exists(mixed $key): bool
    {
        return array_key_exists($key, $this->array);
    }

    public function contains(mixed $value, bool $strict = true): bool
    {
        return in_array($value, $this->array, $strict);
    }

    /**
     * @return mixed
     */
    public function indexOf(mixed $value, bool $strict = true)
    {
        return $this->search($value, $strict);
    }

    /**
     * @return mixed
     */
    public function lastIndexOf(mixed $value, bool $strict = true)
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
     * @return mixed
     */
    public function search(mixed $needle, bool $strict = true)
    {
        return array_search($needle, $this->array, $strict);
    }

    public function join(string $glue = ''): StringObject
    {
        return self::detectStringType(implode($glue, $this->array));
    }

    public function serialize(): string
    {
        return serialize($this->array);
    }

    public function unserialize(string|\Stringable|StringObject $string): self
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
     * @return int
     */
    public function push(mixed $value)
    {
        return $this->pushBack($value);
    }

    /**
     * @return int
     */
    public function pushFront(mixed $value)
    {
        return array_unshift($this->array, $value);
    }

    public function append(...$values): ArrayObject
    {
        array_push($this->array, ...$values);
        return $this;
    }

    /**
     * @return int
     */
    public function pushBack(mixed $value)
    {
        return array_push($this->array, $value);
    }

    /**
     * @return $this
     */
    public function insert(int $offset, mixed $value): self
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

    public function slice(int $offset, ?int $length = null, bool $preserve_keys = false): static
    {
        return new static(array_slice($this->array, $offset, $length, $preserve_keys)); // @phpstan-ignore new.static
    }

    /**
     * @return ArrayObject|mixed|StringObject
     */
    public function randomGet()
    {
        return static::detectType($this->array[array_rand($this->array, 1)]);
    }

    public function each(callable $fn): self
    {
        array_walk($this->array, $fn);

        return $this;
    }

    /**
     * @param array $args
     */
    public function map(callable $fn, ...$args): static
    {
        return new static(array_map($fn, $this->array, ...$args)); // @phpstan-ignore new.static
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
     */
    public function keys(...$args): static
    {
        return new static(array_keys($this->array, ...$args)); // @phpstan-ignore new.static
    }

    public function values(): static
    {
        return new static(array_values($this->array)); // @phpstan-ignore new.static
    }

    public function column(mixed $column_key, mixed $index = null): static
    {
        return new static(array_column($this->array, $column_key, $index)); // @phpstan-ignore new.static
    }

    public function unique(int $sort_flags = SORT_STRING): static
    {
        return new static(array_unique($this->array, $sort_flags)); // @phpstan-ignore new.static
    }

    public function reverse(bool $preserve_keys = false): static
    {
        return new static(array_reverse($this->array, $preserve_keys)); // @phpstan-ignore new.static
    }

    public function chunk(int $size, bool $preserve_keys = false): static
    {
        return new static(array_chunk($this->array, $size, $preserve_keys)); // @phpstan-ignore new.static
    }

    /**
     * Swap keys and values in an array.
     */
    public function flip(): static
    {
        return new static(array_flip($this->array)); // @phpstan-ignore new.static
    }

    public function filter(callable $fn, int $flag = 0): static
    {
        return new static(array_filter($this->array, $fn, $flag)); // @phpstan-ignore new.static
    }

    /**
     * | Function name     | Sorts by | Maintains key association   | Order of sort               | Related functions |
     * | :---------------- | :------- | :-------------------------- | :-------------------------- | :---------------- |
     * | array_multisort() | value    | associative yes, numeric no | first array or sort options | array_walk()      |
     * | asort()           | value    | yes                         | low to high                 | arsort()          |
     * | arsort()          | value    | yes                         | high to low                 | asort()           |
     * | krsort()          | key      | yes                         | high to low                 | ksort()           |
     * | ksort()           | key      | yes                         | low to high                 | asort()           |
     * | natcasesort()     | value    | yes                         | natural, case insensitive   | natsort()         |
     * | natsort()         | value    | yes                         | natural                     | natcasesort()     |
     * | rsort()           | value    | no                          | high to low                 | sort()            |
     * | shuffle()         | value    | no                          | random                      | array_rand()      |
     * | sort()            | value    | no                          | low to high                 | rsort()           |
     * | uasort()          | value    | yes                         | user defined                | uksort()          |
     * | uksort()          | key      | yes                         | user defined                | uasort()          |
     * | usort()           | value    | no                          | user defined                | uasort()          |
     */

    /**
     * @return $this
     */
    public function asort(int $sort_flags = SORT_REGULAR): self
    {
        asort($this->array, $sort_flags);

        return $this;
    }

    public function arsort(int $sort_flags = SORT_REGULAR): self
    {
        arsort($this->array, $sort_flags);

        return $this;
    }

    public function krsort(int $sort_flags = SORT_REGULAR): self
    {
        krsort($this->array, $sort_flags);

        return $this;
    }

    public function ksort(int $sort_flags = SORT_REGULAR): self
    {
        ksort($this->array, $sort_flags);

        return $this;
    }

    /**
     * @return $this
     */
    public function natcasesort(): self
    {
        if (natcasesort($this->array) !== true) {
            throw new \RuntimeException('natcasesort() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function natsort(): self
    {
        if (natsort($this->array) !== true) {
            throw new \RuntimeException('natsort() failed');
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function rsort(int $sort_flags = SORT_REGULAR): self
    {
        if (rsort($this->array, $sort_flags) !== true) {
            throw new \RuntimeException('rsort() failed');
        }
        return $this;
    }

    public function shuffle(): self
    {
        shuffle($this->array);

        return $this;
    }

    public function sort(int $sort_flags = SORT_REGULAR): self
    {
        sort($this->array, $sort_flags);

        return $this;
    }

    public function uasort(callable $value_compare_func): self
    {
        uasort($this->array, $value_compare_func);

        return $this;
    }

    public function uksort(callable $value_compare_func): self
    {
        uksort($this->array, $value_compare_func);

        return $this;
    }

    public function usort(callable $value_compare_func): self
    {
        usort($this->array, $value_compare_func);

        return $this;
    }

    /**
     * @return ArrayObject|mixed|StringObject
     */
    protected static function detectType(mixed $value)
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

    protected static function detectArrayType(array $value): static
    {
        return new static($value); // @phpstan-ignore new.static
    }
}
