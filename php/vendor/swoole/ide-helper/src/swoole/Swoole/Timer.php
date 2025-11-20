<?php

declare(strict_types=1);

namespace Swoole;

use Swoole\Timer\Iterator;

/**
 * The Timer class provides a way to schedule callbacks to be executed after a given time within a process.
 *
 * Timer operations are performed in memory only; there is no IO involved. Benchmark result shows that it takes 0.08
 * second to create/delete 100,000 timers using random intervals.
 */
class Timer
{
    /**
     * Set runtime options for timers.
     *
     * @param array $settings An array of settings. There is only one option available:
     *                        - \Swoole\Constant::OPTION_ENABLE_COROUTINE: whether to enable coroutine support for timers.
     * @see \swoole_timer_set()
     * @see \Swoole\Constant::OPTION_ENABLE_COROUTINE
     * @alias This method has an alias function \swoole_timer_set().
     * @deprecated 4.6.0
     */
    public static function set(array $settings): void
    {
    }

    /**
     * Add a timer that will run when the specified timer interval has elapsed.
     *
     * If coroutine support is enabled, Swoole will create a new coroutine to execute the callback function. Thus, there
     * is no need to create a new coroutine manually in the callback function.
     *
     * After a timer has been added, it can be removed by calling \Swoole\Timer::clear().
     *
     * Execution time of the callback function does not affect the next trigger time. In the following example, the
     * timer is set to trigger every 10 ms, and the callback function takes 5 ms to execute. The timer is triggered at
     * 0.000 s for the first time, and finishes at 0.005 s. The next one will be triggered at 0.010 s, but not 0.015 s.
     *
     *     Swoole\Timer::tick(10, function() { // Triggered every 10 ms.
     *         // Assuming the callback function takes 5 ms to execute.
     *     });
     *
     * The actual time between the timer being scheduled and the timer being executed may be longer than the specified
     * interval. A timer may be skipped if the callback function takes too long to execute; in this case, the timer will
     * be triggered again at the next interval. In the following example, the timer is set to trigger every 10 ms, and
     * the callback function takes 12 ms to execute. The timer is triggered at 0.000 s for the first time, and finishes
     * at 0.012 s. The one scheduled at 0.010 s will be skipped, and the next one will be triggered at 0.020 s.
     *
     *     Swoole\Timer::tick(10, function() { // Triggered every 10 ms.
     *         // Assuming the callback function takes 12 ms to execute.
     *     });
     *
     * @param int $ms The timer interval in milliseconds. It must be no less than SWOOLE_TIMER_MIN_MS (1 millisecond).
     * @param callable $callback The callback function to be executed when the timer interval has elapsed.
     * @param mixed $params The parameters to be passed to the callback function.
     * @return int|false Returns the timer ID on success, or false on failure.
     * @alias This method has an alias function \swoole_timer_tick().
     * @see SWOOLE_TIMER_MIN_MS
     * @see \swoole_timer_tick()
     * @see \Swoole\Timer::clear()
     * @see \Swoole\Timer::clearAll()
     * @see \Swoole\Event::defer() Defers the execution of a callback.
     */
    public static function tick(int $ms, callable $callback, ...$params): int|false
    {
    }

    /**
     * Add a timer that only runs once after the specified number of milliseconds.
     *
     * This method is different from PHP function sleep() in that it does not block the process when coroutine support
     * is enabled.
     *
     * If coroutine support is enabled, Swoole will create a new coroutine to execute the callback function. Thus, there
     * is no need to create a new coroutine manually in the callback function.
     *
     * After a timer has been added, it can be removed by calling \Swoole\Timer::clear().
     *
     * @param int $ms The number of milliseconds to wait before the timer is executed. It must be no less than SWOOLE_TIMER_MIN_MS (1 millisecond).
     * @param callable $callback The callback function to execute when the timer is executed.
     * @param mixed ...$params The parameters to pass to the callback function.
     * @return int|false Returns the timer ID on success, or false on failure.
     * @alias This method has an alias function \swoole_timer_after().
     * @see SWOOLE_TIMER_MIN_MS
     * @see \swoole_timer_after()
     * @see \Swoole\Timer::clear()
     * @see \Swoole\Timer::clearAll()
     * @see \Swoole\Event::defer() Defers the execution of a callback.
     */
    public static function after(int $ms, callable $callback, ...$params): int|false
    {
    }

    /**
     * Check if the timer exists.
     *
     * @param int $timer_id Timer ID returned by \Swoole\Timer::tick() or \Swoole\Timer::after().
     * @return bool Returns true if the timer exists, otherwise false.
     * @alias This method has an alias function \swoole_timer_exists().
     * @see \swoole_timer_exists()
     */
    public static function exists(int $timer_id): bool
    {
    }

    /**
     * Get the timer information.
     *
     * Timer information returned is in array format, with the following five fields included:
     *   - exec_msec (integer): Relative time of the next execution (in milliseconds).
     *   - exec_count (integer): The number of times the timer has been executed. Added in Swoole 4.8.0.
     *   - interval (integer): The interval of the timer (for timers added via method \Swoole\Timer::tick()).
     *   - round (integer): The number of rounds the underling event loop has been executed when the timer was first added.
     *   - removed (boolean): Whether the timer has been removed.
     *
     * @param int $timer_id Timer ID returned by \Swoole\Timer::tick() or \Swoole\Timer::after().
     * @return array|null Returns an array of timer information, or null if the timer does not exist.
     * @alias This method has an alias function \swoole_timer_info().
     * @see \swoole_timer_info()
     * @since 4.4.0
     */
    public static function info(int $timer_id): ?array
    {
    }

    /**
     * Get statistics of all timers.
     *
     * This method returns an array with three fields included:
     *   - initialized (boolean): Whether Swoole has been initialized to execute timers.
     *   - num (integer): Number of timers.
     *   - round (integer): The number of rounds the underling event loop has been executed.
     *
     * @return array Returns an array of timer statistics.
     * @alias This method has an alias function \swoole_timer_stats().
     * @see \swoole_timer_stats()
     * @since 4.4.0
     */
    public static function stats(): array
    {
    }

    /**
     * Get a list of timer IDs of all the timers set in current process.
     *
     * @alias This method has an alias function \swoole_timer_list().
     * @see \swoole_timer_list()
     * @since 4.4.0
     *
     * @example
     * <pre>
     * foreach (\Swoole\Timer::list() as $timerId) {
     *   var_dump(\Swoole\Timer::info($timerId));
     * };
     * <pre>
     */
    public static function list(): Iterator
    {
    }

    /**
     * Clear a timer in current process.
     *
     * @param int $timer_id Timer ID returned by \Swoole\Timer::tick() or \Swoole\Timer::after().
     * @return bool Returns true on success, false on failure or if the timer does not exist.
     * @alias This method has an alias function \swoole_timer_clear().
     * @see \swoole_timer_clear()
     */
    public static function clear(int $timer_id): bool
    {
    }

    /**
     * Clear all timers set in current process.
     *
     * @return bool Returns true on success, false on failure.
     * @alias This method has an alias function \swoole_timer_clear_all().
     * @see \swoole_timer_clear_all()
     * @since 4.4.0
     */
    public static function clearAll(): bool
    {
    }
}
