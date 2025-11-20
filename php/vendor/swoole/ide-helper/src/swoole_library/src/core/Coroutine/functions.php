<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole\Coroutine;

use Swoole\Coroutine;

function run(callable $fn, ...$args)
{
    $s       = new Scheduler();
    $options = Coroutine::getOptions();
    if (!isset($options['hook_flags'])) {
        $s->set(['hook_flags' => SWOOLE_HOOK_ALL]);
    }
    $s->add($fn, ...$args);
    return $s->start();
}

function go(callable $fn, ...$args)
{
    return Coroutine::create($fn, ...$args);
}

function defer(callable $fn)
{
    Coroutine::defer($fn);
}

function batch(array $tasks, float $timeout = -1): array
{
    $wg = new WaitGroup(count($tasks));
    foreach ($tasks as $id => $task) {
        Coroutine::create(function () use ($wg, &$tasks, $id, $task) {
            $tasks[$id] = null;
            $tasks[$id] = $task();
            $wg->done();
        });
    }
    $wg->wait($timeout);
    return $tasks;
}

function parallel(int $n, callable $fn): void
{
    $count = $n;
    $wg    = new WaitGroup($n);
    while ($count--) {
        Coroutine::create(function () use ($fn, $wg) {
            $fn();
            $wg->done();
        });
    }
    $wg->wait();
}

/**
 * Applies the callback to the elements of the given list.
 *
 * The callback function takes on two parameters. The list parameter's value being the first, and the key/index second.
 * Each callback runs in a new coroutine, allowing the list to be processed in parallel.
 *
 * @param array $list A list of key/value paired input data.
 * @param callable $fn The callback function to apply to each item on the list. The callback takes on two parameters.
 *                     The list parameter's value being the first, and the key/index second.
 * @param float $timeout > 0 means waiting for the specified number of seconds. other means no waiting.
 * @return array Returns an array containing the results of applying the callback function to the corresponding value
 *               and key of the list (used as arguments for the callback). The returned array will preserve the keys of
 *               the list.
 */
function map(array $list, callable $fn, float $timeout = -1): array
{
    $wg = new WaitGroup(count($list));
    foreach ($list as $id => $elem) {
        Coroutine::create(function () use ($wg, &$list, $id, $elem, $fn): void {
            $list[$id] = null;
            $list[$id] = $fn($elem, $id);
            $wg->done();
        });
    }
    $wg->wait($timeout);
    return $list;
}

function deadlock_check()
{
    $all_coroutines = Coroutine::listCoroutines();
    $count          = Coroutine::stats()['coroutine_num'];
    echo "\n===================================================================",
    "\n [FATAL ERROR]: all coroutines (count: {$count}) are asleep - deadlock!",
    "\n===================================================================\n";

    $options = Coroutine::getOptions();
    if (empty($options['deadlock_check_disable_trace'])) {
        $index = 0;
        $limit = empty($options['deadlock_check_limit']) ? 32 : intval($options['deadlock_check_limit']);
        $depth = empty($options['deadlock_check_depth']) ? 32 : intval($options['deadlock_check_depth']);
        foreach ($all_coroutines as $cid) {
            echo "\n [Coroutine-{$cid}]";
            echo "\n--------------------------------------------------------------------\n";
            echo Coroutine::printBackTrace($cid, DEBUG_BACKTRACE_IGNORE_ARGS, $depth);
            echo "\n";
            $index++;
            // limit the number of maximum outputs
            if ($index >= $limit) {
                break;
            }
        }
    }
}
