<?php

declare(strict_types=1);

namespace Swoole\Atomic;

/**
 * The \Swoole\Atomic\Long class is used as atomic lock-free counters. It protects an underlying int value by providing
 * methods that perform atomic operations on the value.
 *
 * The class uses shared memory to store counters, and the counters can be accessed by multiple processes. There is no
 * need to use locks since the implementation is based on built-in atomic operations in gcc/clang.
 *
 * When using the counters in worker processes of a Swoole server, they must be created before method Server::start() is
 * called. When using the counters in Process objects, they must be created before method Process::start() is called.
 *
 * This class uses signed 64-bit integers to store the value. To store the value using unsigned 32-bit integers, use
 * class \Swoole\Atomic instead.
 *
 * @see \Swoole\Atomic
 * @not-serializable Objects of this class cannot be serialized.
 */
class Long
{
    /**
     * @param int $value The initial value of the counter. The default value is 0.
     */
    public function __construct(int $value = 0)
    {
    }

    /**
     * Atomically adds a value to the counter.
     *
     * @param int $add_value The value to be added to the counter. The default value is 1.
     * @return int The new value of the counter.
     */
    public function add(int $add_value = 1): int
    {
    }

    /**
     * Atomically subtracts a value from the counter.
     *
     * @param int $sub_value The value to be subtracts from the counter. The default value is 1.
     * @return int The new value of the counter.
     */
    public function sub(int $sub_value = 1): int
    {
    }

    /**
     * Get the current value of the counter.
     *
     * @return int The current value of the counter.
     */
    public function get(): int
    {
    }

    /**
     * Set the value of the counter.
     *
     * @param int $value The new value of the counter.
     */
    public function set(int $value): void
    {
    }

    /**
     * Atomically compare and set the value of the counter.
     *
     * For example, assuming current value of the counter is 10,
     *   - $atomic->cmpset(11, 20); // This will not change the value of the counter.
     *   - $atomic->cmpset(10, 20); // This will set the value to 20.
     *
     * @param int $cmp_value The value to be compared with the current value of the counter.
     * @param int $new_value The new value of the counter.
     * @return bool True if the value of the counter was changed, false otherwise.
     */
    public function cmpset(int $cmp_value, int $new_value): bool
    {
    }
}
