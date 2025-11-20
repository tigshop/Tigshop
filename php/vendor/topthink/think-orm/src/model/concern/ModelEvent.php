<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2023 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
declare(strict_types=1);

namespace think\model\concern;

use ReflectionClass;
use think\db\exception\ModelEventException;
use think\helper\Str;

/**
 * 模型事件处理.
 */
trait ModelEvent
{
    /**
     * Event对象
     *
     * @var object
     */
    protected static $event;

    /**
     * 是否需要事件响应.
     *
     * @var bool
     */
    protected $withEvent = true;

    /**
     * 事件观察者.
     *
     * @var string
     */
    protected $eventObserver;

    /**
     * 设置Event对象
     *
     * @param object $event Event对象
     *
     * @return void
     */
    public static function setEvent($event)
    {
        self::$event = $event;
    }

    /**
     * 当前操作的事件响应.
     *
     * @param bool $event 是否需要事件响应
     *
     * @return $this
     */
    public function withEvent(bool $event)
    {
        $this->withEvent = $event;

        return $this;
    }

    /**
     * 触发事件.
     *
     * @param string $event 事件名
     *
     * @return bool
     */
    protected function trigger(string $event): bool
    {
        if (!$this->withEvent) {
            return true;
        }

        $call = 'on' . Str::studly($event);

        try {
            if ($this->eventObserver) {
                $reflect  = new ReflectionClass($this->eventObserver);
                $observer = $reflect->newinstance();
            } else {
                $observer = static::class;
            }

            if (method_exists($observer, $call)) {
                $result = $this->invoke([$observer, $call], [$this]);
            } elseif (is_object(self::$event) && method_exists(self::$event, 'trigger')) {
                $result = self::$event->trigger(static::class . '.' . $event, $this);
                $result = empty($result) ? true : end($result);
            } else {
                $result = true;
            }

            return !(false === $result);
        } catch (ModelEventException $e) {
            return false;
        }
    }
}
