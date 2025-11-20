<?php

declare(strict_types=1);

namespace Swoole;

/**
 * History Changes:
 *
 * 1. In Swoole 5.0.0, class \Swoole\Table no longer implements interface \ArrayAccess. Following methods
 *    have been removed from Swoole 5.0.0:
 *    * \Swoole\Table::offsetExists()
 *    * \Swoole\Table::offsetGet()
 *    * \Swoole\Table::offsetSet()
 *    * \Swoole\Table::offsetUnset()
 *
 * @not-serializable Objects of this class cannot be serialized.
 */
class Table implements \Iterator, \Countable
{
    public const TYPE_INT = 1;

    public const TYPE_FLOAT = 2;

    public const TYPE_STRING = 3;

    /**
     * Maximum number of rows in the table.
     *
     * This property isn't initialized when the object is created; instead, it is initialized when the table is created,
     * i.e., when method Table::create() is called successfully. Once initialized, this property never changes, even
     * after the table is destroyed (via method \Swoole\Table::destroy()).
     *
     * This property doesn't always contain the same value as the return value of method \Swoole\Table::getSize().
     * The two values are of the same only after the table is created but before it's destroyed. i.e., the two values
     * are of the same only between the calls of method \Swoole\Table::create() and method \Swoole\Table::destroy().
     *
     * @see \Swoole\Table::create()
     * @see \Swoole\Table::getSize()
     */
    public ?int $size;

    /**
     * Memory allocated (in bytes) for the table.
     *
     * This property isn't initialized when the object is created; instead, it is initialized when the table is created,
     * i.e., when method Table::create() is called successfully. Once initialized, this property never changes, even
     * after the table is destroyed (via method \Swoole\Table::destroy()).
     *
     * This property doesn't always contain the same value as the return value of method \Swoole\Table::getMemorySize().
     * The two values are of the same only after the table is created but before it's destroyed. i.e., the two values
     * are of the same only between the calls of method \Swoole\Table::create() and method \Swoole\Table::destroy().
     *
     * @see \Swoole\Table::create()
     * @see \Swoole\Table::getMemorySize()
     */
    public ?int $memorySize;

    /**
     * @param int $table_size Maximum number of rows in the table.
     */
    public function __construct(int $table_size, float $conflict_proportion = 0.2)
    {
    }

    /**
     * @param int $type Must be one of the following constants: Table::TYPE_INT, Table::TYPE_FLOAT, or Table::TYPE_STRING.
     * @param int $size Length of the string. This parameter is ignored for other types.
     */
    public function column(string $name, int $type, int $size = 0): bool
    {
    }

    /**
     * Create the table.
     *
     * @return bool TRUE on success, FALSE on failure.
     */
    public function create(): bool
    {
    }

    /**
     * Destroy the table.
     *
     * It will free all memory allocated for the table, although the Table object itself still exists. After calling
     * this method, the Table object should not be used anymore.
     *
     * After the table is destroyed,
     *   - property $size and $memorySize still contain the same values of the table before it's destroyed.
     *   - method \Swoole\Table::getSize() and \Swoole\Table::getMemorySize() return 0.
     *
     * @return bool returns TRUE all the time
     */
    public function destroy(): bool
    {
    }

    public function set(string $key, array $value): bool
    {
    }

    public function get(string $key, ?string $field = null): mixed
    {
    }

    /**
     * @see \Countable::count()
     * @see https://www.php.net/manual/en/countable.count.php
     * {@inheritDoc}
     */
    public function count(): int
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Table::delete().
     * @see \Swoole\Table::delete()
     */
    public function del(string $key): bool
    {
    }

    /**
     * @alias Alias of method \Swoole\Table::del().
     * @see \Swoole\Table::del()
     */
    public function delete(string $key): bool
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Table::exist().
     * @see \Swoole\Table::exist()
     */
    public function exists(string $key): bool
    {
    }

    /**
     * @alias Alias of method \Swoole\Table::exists().
     * @see \Swoole\Table::exists()
     */
    public function exist(string $key): bool
    {
    }

    public function incr(string $key, string $column, int|float $incrby = 1): int|float
    {
    }

    public function decr(string $key, string $column, int|float $incrby = 1): int|float
    {
    }

    /**
     * Get maximum number of rows in the table.
     *
     * This method doesn't always return the same value as property \Swoole\Table::$size. The two values are of
     * the same only after the table is created but before it's destroyed. i.e., the two values are of the same only
     * between the calls of method \Swoole\Table::create() and method \Swoole\Table::destroy().
     *
     * @return int Returns maximum number of rows in the table. If the table has been destroyed, returns 0.
     * @see \Swoole\Table::$size
     */
    public function getSize(): int
    {
    }

    /**
     * Get memory allocated (in bytes) for the table. If the table hasn't been created yet (by calling method
     * Table::create()) of if the table has been destroyed (by calling method Table::destroy()), this method
     * will return 0.
     *
     * This method doesn't always return the same value as property \Swoole\Table::$memorySize. The two values are of
     * the same only after the table is created but before it's destroyed. i.e., the two values are of the same only
     * between the calls of method \Swoole\Table::create() and method \Swoole\Table::destroy().
     *
     * @return int Returns memory allocated (in bytes) for the table. If the table hasn't been created or has been destroyed, returns 0.
     * @see \Swoole\Table::$memorySize
     */
    public function getMemorySize(): int
    {
    }

    /**
     * @return array|false Return an array of stats information; Return FALSE when error happens.
     * @since 4.8.0
     */
    public function stats(): array|false
    {
    }

    /**
     * @see \Iterator::rewind()
     * @see https://www.php.net/manual/en/iterator.rewind.php
     * {@inheritDoc}
     */
    public function rewind(): void
    {
    }

    /**
     * @see \Iterator::valid()
     * @see https://www.php.net/manual/en/iterator.valid.php
     * {@inheritDoc}
     */
    public function valid(): bool
    {
    }

    /**
     * @see \Iterator::next()
     * @see https://www.php.net/manual/en/iterator.next.php
     * {@inheritDoc}
     */
    public function next(): void
    {
    }

    /**
     * @see \Iterator::current()
     * @see https://www.php.net/manual/en/iterator.current.php
     * {@inheritDoc}
     */
    public function current(): mixed
    {
    }

    /**
     * @see \Iterator::key()
     * @see https://www.php.net/manual/en/iterator.key.php
     * {@inheritDoc}
     */
    public function key(): mixed
    {
    }
}
