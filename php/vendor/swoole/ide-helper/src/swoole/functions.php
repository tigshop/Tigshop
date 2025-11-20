<?php

declare(strict_types=1);

use Swoole\NameResolver;
use Swoole\NameResolver\Context;
use Swoole\Timer\Iterator;

/**
 * Gets the current Swoole version. This information is also available in the predefined constant SWOOLE_VERSION.
 *
 * @return string returns a string containing the version of Swoole
 */
function swoole_version(): string
{
}

/**
 * Gets the number of CPU cores.
 *
 * @return int returns the number of CPU cores
 */
function swoole_cpu_num(): int
{
}

/**
 * Get the error code of the latest failed operation.
 *
 * To translate the error code to an error message, use the following statement:
 *     swoole_strerror(swoole_last_error(), SWOOLE_STRERROR_SWOOLE);
 *
 * @alias This function has an alias method \Swoole\Server::getLastError().
 * @see \Swoole\Server::getLastError()
 * @see swoole_strerror()
 */
function swoole_last_error(): int
{
}

/**
 * Lookup the IPv4/IPv6 address corresponding to a given Internet host name.
 *
 * Please check documentation of method \Swoole\Coroutine::dnsLookup() for more details.
 *
 * @alias This function has two alias methods: \Swoole\Coroutine::dnsLookup() and \Swoole\Coroutine\System::dnsLookup().
 * @see \Swoole\Coroutine::dnsLookup()
 * @see \Swoole\Coroutine\System::dnsLookup()
 */
function swoole_async_dns_lookup_coro(string $domain_name, float $timeout = 60, int $type = AF_INET): string|false
{
}

function swoole_async_set(array $settings): void
{
}

/**
 * Create a coroutine.
 *
 * @return int|false Returns the coroutine ID on success, or false on failure. Note that this method won't return
 *                   the coroutine ID back until the new coroutine yields its execution.
 * @alias This function has an alias function \go() and an alias method \Swoole\Coroutine::create().
 * @see \go()
 * @see \Swoole\Coroutine::create()
 */
function swoole_coroutine_create(callable $func, ...$params): int|false
{
}

/**
 * Defers the execution of a callback function until the surrounding function of a coroutine returns.
 *
 * @alias This function has an alias function \defer() and an alias method \Swoole\Coroutine::defer().
 * @see \defer()
 * @see \Swoole\Coroutine::defer()
 *
 * @example
 * <pre>
 * swoole_coroutine_create(function () {  // The surrounding function of a coroutine.
 *   echo '1';
 *   swoole_coroutine_defer(function () { // The callback function to be deferred.
 *     echo '3';
 *   });
 *   echo '2';
 * });
 * <pre>
 */
function swoole_coroutine_defer(callable $callback): void
{
}

function swoole_coroutine_socketpair(int $domain, int $type, int $protocol): array|false
{
}

function swoole_test_kernel_coroutine(int $count = 100, float $sleep_time = 1.0): void
{
}

/**
 * @alias This function has an alias function swoole_select().
 * @see swoole_select()
 */
function swoole_client_select(array &$read_array, array &$write_array, array &$error_array, float $timeout = 0.5): int|false
{
}

/**
 * @alias This function is an alias of function swoole_client_select().
 * @see swoole_client_select()
 */
function swoole_select(array &$read_array, array &$write_array, array &$error_array, float $timeout = 0.5): int|false
{
}

/**
 * Set the process name.
 *
 * There isn't a method in Swoole to get the process name. You can use PHP function \cli_get_process_title() to get the process name.
 *
 * @param string $process_name The new process name.
 * @return bool Returns true on success or false on failure.
 * @alias This function has an alias method \Swoole\Process::name().
 * @see \Swoole\Process::name()
 * @see https://www.php.net/cli_set_process_title
 * @see https://www.php.net/cli_get_process_title
 * @pseudocode-included This is a built-in method in Swoole. The PHP code included inside this method is for explanation purpose only.
 */
function swoole_set_process_name(string $process_name): bool
{
    if (PHP_SAPI !== 'cli') {
        // An E_WARNING level error will be thrown out here.
        return false;
    }

    return \cli_set_process_title($process_name);
}

function swoole_get_local_ip(): array
{
}

function swoole_get_local_mac(): array
{
}

/**
 * Get the error message corresponding to the given error code.
 *
 * @param int $errno Error code.
 * @param int $error_type Error type. There are four types of error messages:
 *                        - SWOOLE_STRERROR_SYSTEM: Generic system error message.
 *                        - SWOOLE_STRERROR_GAI: Error message from function call getaddrinfo().
 *                        - SWOOLE_STRERROR_DNS: Error message from network host-related functions.
 *                        - SWOOLE_STRERROR_SWOOLE: Error message of Swoole.
 * @return string Return the error message corresponding to the error code.
 * @see swoole_last_error()
 * @see \Swoole\Server::getLastError()
 */
function swoole_strerror(int $errno, int $error_type = SWOOLE_STRERROR_SYSTEM): string
{
}

function swoole_errno(): int
{
}

function swoole_clear_error(): void
{
}

function swoole_error_log(int $level, string $msg): void
{
}

/**
 * @since 4.8.1
 */
function swoole_error_log_ex(int $level, int $error, string $msg): void
{
}

/**
 * @since 4.8.1
 */
function swoole_ignore_error(int $error): void
{
}

function swoole_hashcode(string $data, int $type = 0): int|false
{
}

/**
 * @since 4.5.0
 */
function swoole_mime_type_add(string $suffix, string $mime_type): bool
{
}

/**
 * @since 4.5.0
 */
function swoole_mime_type_set(string $suffix, string $mime_type): void
{
}

/**
 * @since 4.5.0
 */
function swoole_mime_type_exists(string $filename): bool
{
}

/**
 * @since 4.5.0
 */
function swoole_mime_type_delete(string $suffix): bool
{
}

/**
 * @alias This function has an alias function swoole_get_mime_type().
 * @see swoole_get_mime_type()
 * @since 4.5.0
 */
function swoole_mime_type_get(string $filename): string
{
}

/**
 * @alias This function is an alias of function swoole_mime_type_get().
 * @see swoole_mime_type_get()
 */
function swoole_get_mime_type(string $filename): string
{
}

function swoole_mime_type_list(): array
{
}

function swoole_clear_dns_cache(): void
{
}

function swoole_substr_unserialize(string $str, int $offset, int $length, array $options = []): mixed
{
}

function swoole_substr_json_decode(string $str, int $offset, int $length, bool $associative = false, int $depth = 512, int $flags = 0): mixed
{
}

function swoole_internal_call_user_shutdown_begin(): bool
{
}

/**
 * Get all PHP objects of current call stack.
 *
 * @return array|false Return an array of objects back; return FALSE when no objects exist or when error happens.
 * @since 4.8.1
 */
function swoole_get_objects()
{
}

/**
 * Get status information of current call stack.
 *
 * @return array The array contains two fields: "object_num" (# of objects) and "resource_num" (# of resources).
 * @since 4.8.1
 */
function swoole_get_vm_status()
{
}

/**
 * @return object|false Return the specified object back; return FALSE when no object found or when error happens.
 * @since 4.8.1
 */
function swoole_get_object_by_handle(int $handle)
{
}

function swoole_name_resolver_lookup(string $name, Context $ctx): string
{
}

function swoole_name_resolver_add(NameResolver $ns): bool
{
}

function swoole_name_resolver_remove(NameResolver $ns): bool
{
}

/**
 * @param int $events a SWOOLE_EVENT_READ or SWOOLE_EVENT_WRITE event, or both (SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE).
 * @alias This function is an alias of method \Swoole\Event::add().
 * @see \Swoole\Event::add()
 */
function swoole_event_add(mixed $fd, ?callable $read_callback = null, ?callable $write_callback = null, int $events = SWOOLE_EVENT_READ): bool
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::del().
 * @see \Swoole\Event::del()
 */
function swoole_event_del(mixed $fd): bool
{
}

/**
 * @param int $events a SWOOLE_EVENT_READ or SWOOLE_EVENT_WRITE event, or both (SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE).
 * @alias This function is an alias of method \Swoole\Event::set().
 * @see \Swoole\Event::set()
 */
function swoole_event_set(mixed $fd, ?callable $read_callback = null, ?callable $write_callback = null, int $events = 0): bool
{
}

/**
 * @param int $events a SWOOLE_EVENT_READ or SWOOLE_EVENT_WRITE event, or both (SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE).
 * @alias This function is an alias of method \Swoole\Event::isset().
 * @see \Swoole\Event::isset()
 */
function swoole_event_isset(mixed $fd, int $events = SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE): bool
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::dispatch().
 * @see \Swoole\Event::dispatch()
 */
function swoole_event_dispatch(): bool
{
}

/**
 * Defers the execution of the given callback.
 *
 * This function works similarly to statement setTimeout(callback, 0) in JavaScript.
 *
 * @param callable $callback The callback to be executed.
 * @return true This method always returns true.
 * @alias This function is an alias of method \Swoole\Event::defer().
 * @see \Swoole\Event::defer()
 * @see \swoole_timer_after() Add a timer that only runs once after the specified number of milliseconds.
 */
function swoole_event_defer(callable $callback)
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::cycle().
 * @see \Swoole\Event::cycle()
 */
function swoole_event_cycle(?callable $callback, bool $before = false): bool
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::write().
 * @see \Swoole\Event::write()
 */
function swoole_event_write(mixed $fd, string $data): bool
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::wait().
 * @see \Swoole\Event::wait()
 */
function swoole_event_wait(): void
{
}

/**
 * @alias This function is an alias of method \Swoole\Event::exit().
 * @see \Swoole\Event::exit()
 */
function swoole_event_exit(): void
{
}

/**
 * Set runtime options for timers.
 *
 * @param array $settings An array of settings. There is only one option available:
 *                        - \Swoole\Constant::OPTION_ENABLE_COROUTINE: whether to enable coroutine support for timers.
 * @see \Swoole\Timer::set()
 * @see \Swoole\Constant::OPTION_ENABLE_COROUTINE
 * @alias This function is an alias of method \Swoole\Timer::set().
 * @deprecated 4.6.0
 */
function swoole_timer_set(array $settings): void
{
}

/**
 * Add a timer that only runs once after the specified number of milliseconds.
 *
 * This method is different from PHP function sleep() in that it does not block the process when coroutine support is enabled.
 *
 * If coroutine support is enabled, Swoole will create a new coroutine to execute the callback function. Thus, there
 * is no need to create a new coroutine manually in the callback function.
 *
 * After a timer has been added, it can be removed by calling \swoole_timer_clear().
 *
 * @param int $ms The number of milliseconds to wait before the timer is executed.  It must be no less than SWOOLE_TIMER_MIN_MS (1 millisecond).
 * @param callable $callback The callback function to execute when the timer is executed.
 * @param mixed ...$params The parameters to pass to the callback function.
 * @return int|false Returns the timer ID on success, or false on failure.
 * @alias This function is an alias of method \Swoole\Timer::after().
 * @see SWOOLE_TIMER_MIN_MS
 * @see \Swoole\Timer::after()
 * @see \swoole_timer_clear()
 * @see \swoole_timer_clear_all()
 * @see \swoole_event_defer() Defers the execution of a callback.
 */
function swoole_timer_after(int $ms, callable $callback, ...$params): int|false
{
}

/**
 * Add a timer that will run when the specified timer interval has elapsed.
 *
 * If coroutine support is enabled, Swoole will create a new coroutine to execute the callback function. Thus, there
 * is no need to create a new coroutine manually in the callback function.
 *
 * After a timer has been added, it can be removed by calling \swoole_timer_clear().
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
 * @alias This function is an alias of method \Swoole\Timer::tick().
 * @see SWOOLE_TIMER_MIN_MS
 * @see \Swoole\Timer::tick()
 * @see \swoole_timer_clear()
 * @see \swoole_timer_clear_all()
 * @see \swoole_event_defer() Defers the execution of a callback.
 */
function swoole_timer_tick(int $ms, callable $callback, ...$params): int|false
{
}

/**
 * Check if the timer exists.
 *
 * @param int $timer_id Timer ID returned by \Swoole\Timer::tick() or \Swoole\Timer::after().
 * @return bool Returns true if the timer exists, otherwise false.
 * @alias This function is an alias of method \Swoole\Timer::exists().
 * @see \Swoole\Timer::exists()
 */
function swoole_timer_exists(int $timer_id): bool
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
 * @alias This function is an alias of method \Swoole\Timer::info().
 * @see \Swoole\Timer::info()
 */
function swoole_timer_info(int $timer_id): ?array
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
 * @alias This function is an alias of method \Swoole\Timer::stats().
 * @see \Swoole\Timer::stats()
 */
function swoole_timer_stats(): array
{
}

/**
 * Get a list of timer IDs of all the timers set in current process.
 *
 * @alias This function is an alias of method \Swoole\Timer::list().
 * @see \Swoole\Timer::list()
 *
 * @example
 * <pre>
 * foreach (swoole_timer_list() as $timerId) {
 *   var_dump(swoole_timer_info($timerId));
 * };
 * <pre>
 */
function swoole_timer_list(): Iterator
{
}

/**
 * Clear a timer in current process.
 *
 * @param int $timer_id Timer ID returned by \Swoole\Timer::tick() or \Swoole\Timer::after().
 * @return bool Returns true on success, false on failure or if the timer does not exist.
 * @alias This function is an alias of method \Swoole\Timer::clear().
 * @see \Swoole\Timer::clear()
 */
function swoole_timer_clear(int $timer_id): bool
{
}

/**
 * Clear all timers set in current process.
 *
 * @return bool Returns true on success, false on failure.
 * @alias This function is an alias of method \Swoole\Timer::clearAll().
 * @see \Swoole\Timer::clearAll()
 */
function swoole_timer_clear_all(): bool
{
}

/**
 * The coroutine version of PHP's cURL function curl_close().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_close()
 * @see https://www.php.net/curl_close
 */
function swoole_native_curl_close(CurlHandle $handle): void
{
}

/**
 * The coroutine version of PHP's cURL function curl_copy_handle().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_copy_handle()
 * @see https://www.php.net/curl_copy_handle
 */
function swoole_native_curl_copy_handle(CurlHandle $handle): CurlHandle|false
{
}

/**
 * The coroutine version of PHP's cURL function curl_errno().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_errno()
 * @see https://www.php.net/curl_errno
 */
function swoole_native_curl_errno(CurlHandle $handle): int
{
}

/**
 * The coroutine version of PHP's cURL function curl_error().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_error()
 * @see https://www.php.net/curl_error
 */
function swoole_native_curl_error(CurlHandle $handle): string
{
}

/**
 * The coroutine version of PHP's cURL function curl_escape().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_escape()
 * @see https://www.php.net/curl_escape
 */
function swoole_native_curl_escape(CurlHandle $handle, string $string): string|false
{
}

/**
 * The coroutine version of PHP's cURL function curl_exec().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_exec()
 * @see https://www.php.net/curl_exec
 */
function swoole_native_curl_exec(CurlHandle $handle): string|bool
{
}

/**
 * The coroutine version of PHP's cURL function curl_getinfo().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_getinfo()
 * @see https://www.php.net/curl_getinfo
 */
function swoole_native_curl_getinfo(CurlHandle $handle, ?int $option = null): mixed
{
}

/**
 * The coroutine version of PHP's cURL function curl_init().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_init()
 * @see https://www.php.net/curl_init
 */
function swoole_native_curl_init(?string $url = null): CurlHandle|false
{
}

/**
 * The coroutine version of PHP's cURL function curl_multi_add_handle().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_multi_add_handle()
 * @see https://www.php.net/curl_multi_add_handle
 */
function swoole_native_curl_multi_add_handle(CurlMultiHandle $multi_handle, CurlHandle $handle): int
{
}

/**
 * The coroutine version of PHP's cURL function curl_multi_close().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_multi_close()
 * @see https://www.php.net/curl_multi_close
 */
function swoole_native_curl_multi_close(CurlMultiHandle $multi_handle): void
{
}

/**
 * The coroutine version of PHP's cURL function curl_multi_errno().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_multi_errno()
 * @see https://www.php.net/curl_multi_errno
 */
function swoole_native_curl_multi_errno(CurlMultiHandle $multi_handle): int
{
}

/**
 * The coroutine version of PHP's cURL function curl_multi_exec().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_multi_exec()
 * @see https://www.php.net/curl_multi_exec
 */
function swoole_native_curl_multi_exec(CurlMultiHandle $multi_handle, int &$still_running): int
{
}

/**
 * The coroutine version of PHP's cURL function curl_multi_getcontent().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_multi_getcontent()
 * @see https://www.php.net/curl_multi_getcontent
 */
function swoole_native_curl_multi_getcontent(CurlHandle $handle): ?string
{
}

/**
 * The coroutine version of PHP's cURL function curl_multi_info_read().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_multi_info_read()
 * @see https://www.php.net/curl_multi_info_read
 */
function swoole_native_curl_multi_info_read(CurlMultiHandle $multi_handle, ?int &$queued_messages = null): array|false
{
}

/**
 * The coroutine version of PHP's cURL function curl_multi_init().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_multi_init()
 * @see https://www.php.net/curl_multi_init
 */
function swoole_native_curl_multi_init(): CurlMultiHandle
{
}

/**
 * The coroutine version of PHP's cURL function curl_multi_remove_handle().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_multi_remove_handle()
 * @see https://www.php.net/curl_multi_remove_handle
 */
function swoole_native_curl_multi_remove_handle(CurlMultiHandle $multi_handle, CurlHandle $handle): int
{
}

/**
 * The coroutine version of PHP's cURL function curl_multi_select().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_multi_select()
 * @see https://www.php.net/curl_multi_select
 */
function swoole_native_curl_multi_select(CurlMultiHandle $multi_handle, float $timeout = 1.0): int
{
}

/**
 * The coroutine version of PHP's cURL function curl_multi_setopt().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_multi_setopt()
 * @see https://www.php.net/curl_multi_setopt
 */
function swoole_native_curl_multi_setopt(CurlMultiHandle $multi_handle, int $option, mixed $value): bool
{
}

/**
 * The coroutine version of PHP's cURL function curl_pause().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_pause()
 * @see https://www.php.net/curl_pause
 */
function swoole_native_curl_pause(CurlHandle $handle, int $flags): int
{
}

/**
 * The coroutine version of PHP's cURL function curl_reset().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_reset()
 * @see https://www.php.net/curl_reset
 */
function swoole_native_curl_reset(CurlHandle $handle): void
{
}

/**
 * The coroutine version of PHP's cURL function curl_setopt_array().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_setopt_array()
 * @see https://www.php.net/curl_setopt_array
 */
function swoole_native_curl_setopt_array(CurlHandle $handle, array $options): bool
{
}

/**
 * The coroutine version of PHP's cURL function curl_setopt().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_setopt()
 * @see https://www.php.net/curl_setopt
 */
function swoole_native_curl_setopt(CurlHandle $handle, int $option, mixed $value): bool
{
}

/**
 * The coroutine version of PHP's cURL function curl_unescape().
 *
 * This function is available only when Swoole is installed with option "--enable-swoole-curl" included. Don't use this
 * function directly; always use the corresponding PHP's cURL function instead.
 *
 * @see curl_unescape()
 * @see https://www.php.net/curl_unescape
 */
function swoole_native_curl_unescape(CurlHandle $handle, string $string): string|false
{
}
