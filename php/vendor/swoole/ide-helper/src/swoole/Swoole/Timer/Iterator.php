<?php

declare(strict_types=1);

namespace Swoole\Timer;

/**
 * This class works exactly the same as the SPL class \ArrayIterator.
 *
 * This class is used only by method \Swoole\Timer::list() and function \swoole_timer_list(), where a list of timer IDs
 * is returned as an array iterator.
 *
 * @see https://www.php.net/ArrayIterator
 * @see \Swoole\Timer::list()
 * @see \swoole_timer_list()
 * @since 4.4.0
 */
class Iterator extends \ArrayIterator
{
}
