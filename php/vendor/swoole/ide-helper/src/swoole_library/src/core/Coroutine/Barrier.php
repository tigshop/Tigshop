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
use Swoole\Exception;
use Swoole\Timer;

class Barrier
{
    private $cid = -1;

    private $timer = -1;

    private static $cancel_list = [];

    public function __destruct()
    {
        if ($this->timer !== -1) {
            Timer::clear($this->timer);
            if (isset(self::$cancel_list[$this->cid])) {
                unset(self::$cancel_list[$this->cid]);
                return;
            }
        }
        if ($this->cid !== -1 && $this->cid !== Coroutine::getCid()) {
            Coroutine::resume($this->cid);
        } else {
            self::$cancel_list[$this->cid] = true;
        }
    }

    public static function make()
    {
        return new static();
    }

    /**
     * @throws Exception
     */
    public static function wait(Barrier &$barrier, float $timeout = -1)
    {
        if ($barrier->cid !== -1) {
            throw new Exception('The barrier is waiting, cannot wait again.');
        }
        $cid = Coroutine::getCid();
        $barrier->cid = $cid;
        if ($timeout > 0 && ($timeout_ms = (int) ($timeout * 1000)) > 0) {
            $barrier->timer = Timer::after($timeout_ms, function () use ($cid) {
                self::$cancel_list[$cid] = true;
                Coroutine::resume($cid);
            });
        }
        $barrier = null;
        if (!isset(self::$cancel_list[$cid])) {
            Coroutine::yield();
        } else {
            unset(self::$cancel_list[$cid]);
        }
    }
}
