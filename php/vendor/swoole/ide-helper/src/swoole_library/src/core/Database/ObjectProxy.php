<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole\Database;

class ObjectProxy extends \Swoole\ObjectProxy
{
    final public function __clone(): void
    {
        throw new \Error('Trying to clone an uncloneable database proxy object');
    }
}
