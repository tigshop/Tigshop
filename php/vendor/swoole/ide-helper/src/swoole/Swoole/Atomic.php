<?php

declare(strict_types=1);

namespace Swoole;

/**
 * The Atomic class is used as atomic lock-free counters. It protects an underlying int value by providing methods that
 * perform atomic operations on the value.
 *
 * The class uses shared memory to store counters, and the counters can be accessed by multiple processes. There is no
 * need to use locks since the implementation is based on built-in atomic operations in gcc/clang.
 *
 * When using the counters in worker processes of a Swoole server, they must be created before method Server::start() is
 * called. When using the counters in Process objects, they must be created before method Process::start() is called.
 *
 * This class uses unsigned 32-bit integers to store the value. To store the value using signed 64-bit integers, use class
 * \Swoole\Atomic\Long instead. Note that class \Swoole\Atomic\Long doesn't have method wait() nor wakeup() implemented.
 *
 * @see \Swoole\Atomic\Long
 * @not-serializable Objects of this class cannot be serialized.
 */
class Atomic
{
    /**
     * @param int $value The initial value of the counter. The default value is 0. It shouldn't be a negative number.
     */
    public function __construct(int $value = 0)
    {
    }

    /**
     * Atomically adds a value to the counter.
     *
     * @param int $add_value The value to be added to the counter. The default value is 1. It shouldn't be a negative number.
     * @return int The new value of the counter.
     */
    public function add(int $add_value = 1): int
    {
    }

    /**
     * Atomically subtracts a value from the counter.
     *
     * @param int $sub_value The value to be subtracts from the counter. The default value is 1. It shouldn't be a negative number.
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
     * @param int $value The new value of the counter. It shouldn't be a negative number.
     */
    public function set(int $value): void
    {
    }

    /**
     * Put the current process to block until it's woken up by another process or the timeout expires.
     *
     * Before using this method, the counter must be either 0 or 1, otherwise the behavior is undefined.
     *   - When the counter is 0, the current process will be put into a blocking state.
     *   - When the counter is 1, it means the process doesn't need to wait; the method returns true immediately.
     *
     * WARNING: This method blocks the whole process, not just the current coroutine. Thus, it's not recommended to use
     *          this method in Swoole servers nor coroutines.
     *
     * @param float $timeout The timeout in seconds.
     *                       > 0: The process will be woken up after the specified number of seconds (or by another process).
     *                       <= 0: No timeout. The process will resume execution only when woken up by another process.
     * @return bool Returns true if no need to wait or woken up by another process; otherwise returns false.
     *
     * @see https://github.com/deminy/swoole-by-examples/blob/master/examples/io/block-processes-using-swoole-atomic.php
     *      An example showing how to block processes using class \Swoole\Atomic in a multiprocessing environment.
     */
    public function wait(float $timeout = 1.0): bool
    {
    }

    /**
     * Wake up one or more processes that are blocked by method \Swoole\Atomic::wait().
     *
     * Before using this method, the counter must be either 0 or 1, otherwise the behavior is undefined.
     *   - When the counter is 0, it means there is no any processes blocked; the method returns true immediately.
     *   - When the counter is 1, it means there are some processes blocked; the method wakes up (some of) them and returns true.
     *
     * When there are N processes blocked by method \Swoole\Atomic::wait(), the following two statements have the same effect:
     *   - $atomic->wakeup(N);
     *   - for ($i = 0; $i < N; $i++) $atomic->wakeup();
     *
     * There is no guarantee about which processes are awoken. e.g., a process with a higher scheduling priority is not
     * guaranteed to be awoken in preference to a process with a lower priority.
     *
     * @param int $count The number of processes to wake up.
     * @return bool Returns true if the counter is 0 or the method wakes up at least one process; otherwise returns false.
     *
     * @see https://github.com/deminy/swoole-by-examples/blob/master/examples/io/block-processes-using-swoole-atomic.php
     *      An example showing how to block processes using class \Swoole\Atomic in a multiprocessing environment.
     */
    public function wakeup(int $count = 1): bool
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
     * @param int $new_value The new value of the counter. It shouldn't be a negative number.
     * @return bool True if the value of the counter was changed, false otherwise.
     */
    public function cmpset(int $cmp_value, int $new_value): bool
    {
    }
}
