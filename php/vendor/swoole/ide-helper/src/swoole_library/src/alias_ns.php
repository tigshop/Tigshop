<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Co;

use Swoole\Coroutine;

if (SWOOLE_USE_SHORTNAME) { // @phpstan-ignore if.alwaysTrue
    function run(callable $fn, ...$args)
    {
        return \Swoole\Coroutine\run($fn, ...$args);
    }

    function go(callable $fn, ...$args)
    {
        return Coroutine::create($fn, ...$args);
    }

    function defer(callable $fn)
    {
        Coroutine::defer($fn);
    }
}
