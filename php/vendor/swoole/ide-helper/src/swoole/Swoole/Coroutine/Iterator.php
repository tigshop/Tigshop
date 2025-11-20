<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

/**
 * An iterator that can be used to iterate over the IDs of all the running coroutines within the process.
 *
 * In Swoole, this class is only used for \Swoole\Coroutine::list() and \Swoole\Coroutine::listCoroutines(), where the
 * return value is an instance of this class.
 *
 * @example
 * <pre>
 * foreach (\Swoole\Coroutine::list() as $cid) {
 *   var_dump(\Swoole\Coroutine::getBackTrace($cid));
 * };
 * <pre>
 *
 * @see \Swoole\Coroutine::list()
 * @see \Swoole\Coroutine::listCoroutines()
 *
 * @alias It's safe to assume that this class is an alias of PHP class \ArrayIterator.
 * @see https://www.php.net/ArrayIterator
 *
 * @alias This class has an alias of "\Co\Iterator" when directive "swoole.use_shortname" is not explicitly turned off.
 * @see \Co\Iterator
 */
class Iterator extends \ArrayIterator
{
}
