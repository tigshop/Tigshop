<?php

namespace think\swoole\lock;

use Swoole\Table as SwooleTable;
use think\swoole\contract\LockInterface;

class Table implements LockInterface
{

    /**
     * @var SwooleTable
     */
    protected $locks;

    public function prepare()
    {
        $this->locks = new SwooleTable(1024);
        $this->locks->column('time', SwooleTable::TYPE_INT);
        $this->locks->create();
    }

    public function lock($name, $expire = 60)
    {
        $time = time();

        while (true) {
            $lock = $this->locks->get($name);
            if (!$lock || $lock['time'] <= $time - $expire) {
                $this->locks->set($name, ['time' => time()]);
                return true;
            } else {
                usleep(500);
                continue;
            }
        }
    }

    public function unlock($name)
    {
        $this->locks->del($name);
    }

}
