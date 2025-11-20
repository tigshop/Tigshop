<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

/**
 * @alias This class has an alias of "\Co\System" when directive "swoole.use_shortname" is not explicitly turned off.
 * @see \Co\System
 */
class System
{
    /**
     * Get the IPv4/IPv6 address corresponding to a given Internet host name.
     *
     * Please check documentation of method \Swoole\Coroutine::gethostbyname() for more details.
     *
     * @alias This method is an alias of method \Swoole\Coroutine::gethostbyname().
     * @see \Swoole\Coroutine::gethostbyname()
     */
    public static function gethostbyname(string $domain_name, int $type = AF_INET, float $timeout = -1): string|false
    {
    }

    /**
     * Lookup the IPv4/IPv6 address corresponding to a given Internet host name.
     *
     * Please check documentation of method \Swoole\Coroutine::dnsLookup() for more details.
     *
     * @alias This method is an alias of function \swoole_async_dns_lookup_coro().
     * @see \swoole_async_dns_lookup_coro()
     * @see \Swoole\Coroutine::dnsLookup()
     */
    public static function dnsLookup(string $domain_name, float $timeout = 60, int $type = AF_INET): string|false
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Coroutine::exec().
     * @see \Swoole\Coroutine::exec()
     */
    public static function exec(string $command, bool $get_error_stream = false): array|false
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Coroutine::sleep().
     * @see \Swoole\Coroutine::sleep()
     */
    public static function sleep(float $seconds): bool
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Coroutine::getaddrinfo().
     * @see \Swoole\Coroutine::getaddrinfo()
     */
    public static function getaddrinfo(string $domain, int $family = AF_INET, int $socktype = SOCK_STREAM, int $protocol = STREAM_IPPROTO_TCP, ?string $service = null, float $timeout = -1): array|false
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Coroutine::statvfs().
     * @see \Swoole\Coroutine::statvfs()
     */
    public static function statvfs(string $path): array
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Coroutine::readFile().
     * @see \Swoole\Coroutine::readFile()
     */
    public static function readFile(string $filename, int $flag = 0): string|false
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Coroutine::writeFile().
     * @see \Swoole\Coroutine::writeFile()
     */
    public static function writeFile(string $filename, string $fileContent, int $flags = 0): int|false
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Coroutine::wait().
     * @see \Swoole\Coroutine::wait()
     * @since 4.5.0
     */
    public static function wait(float $timeout = -1): array|false
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Coroutine::waitPid().
     * @see \Swoole\Coroutine::waitPid()
     * @since 4.5.0
     */
    public static function waitPid(int $pid, float $timeout = -1): array|false
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Coroutine::waitSignal().
     * @see \Swoole\Coroutine::waitSignal()
     * @since 4.5.0
     */
    public static function waitSignal(int $signo, float $timeout = -1): bool
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Coroutine::waitEvent().
     * @see \Swoole\Coroutine::waitEvent()
     * @since 4.5.0
     */
    public static function waitEvent(mixed $socket, int $events = SWOOLE_EVENT_READ, float $timeout = -1): int|false
    {
    }

    /**
     * @alias This method has an alias method \Swoole\Coroutine::fread().
     * @see \Swoole\Coroutine::fread()
     * @deprecated 4.5.1 Turn on runtime hook SWOOLE_HOOK_FILE or SWOOLE_HOOK_ALL, and use the built-in PHP function fread() directly.
     * @param mixed $handle
     */
    public static function fread($handle, int $length = 0): string|false
    {
    }

    /**
     * @alias This method has an alias method \Swoole\Coroutine::fwrite().
     * @see \Swoole\Coroutine::fwrite()
     * @deprecated 4.5.1 Turn on runtime hook SWOOLE_HOOK_FILE or SWOOLE_HOOK_ALL, and use the built-in PHP function fwrite() directly.
     * @param mixed $handle
     */
    public static function fwrite($handle, string $data, int $length = 0): int|false
    {
    }

    /**
     * @alias This method has an alias method \Swoole\Coroutine::fgets().
     * @see \Swoole\Coroutine::fgets()
     * @deprecated 4.5.1 Turn on runtime hook SWOOLE_HOOK_FILE or SWOOLE_HOOK_ALL, and use the built-in PHP function fgets() directly.
     * @param mixed $handle
     */
    public static function fgets($handle): string|false
    {
    }
}
