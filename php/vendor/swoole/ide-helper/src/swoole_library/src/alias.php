<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

if (SWOOLE_USE_SHORTNAME) { // @phpstan-ignore if.alwaysTrue
    class_alias(Swoole\Coroutine\WaitGroup::class, Co\WaitGroup::class, true);
    class_alias(Swoole\Coroutine\Server::class, Co\Server::class, true);
    class_alias(Swoole\Coroutine\Server\Connection::class, Co\Server\Connection::class, true);
    class_alias(Swoole\Coroutine\FastCGI\Client::class, Co\FastCGI\Client::class, true);
    class_alias(Swoole\Coroutine\FastCGI\Client\Exception::class, Co\FastCGI\Client\Exception::class, true);
    class_alias(Swoole\Coroutine\FastCGI\Proxy::class, Co\FastCGI\Proxy::class, true);
}

class_alias(Swoole\Process\Manager::class, Swoole\Process\ProcessManager::class, true);
