<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

namespace think\swoole;

use think\swoole\concerns\InteractsWithHttp;
use think\swoole\concerns\InteractsWithPools;
use think\swoole\concerns\InteractsWithQueue;
use think\swoole\concerns\InteractsWithRpcClient;
use think\swoole\concerns\InteractsWithRpcServer;
use think\swoole\concerns\InteractsWithServer;
use think\swoole\concerns\InteractsWithSwooleTable;
use think\swoole\concerns\InteractsWithTracing;
use think\swoole\concerns\WithApplication;
use think\swoole\concerns\WithContainer;

/**
 * Class Manager
 */
class Manager
{
    use InteractsWithServer,
        InteractsWithSwooleTable,
        InteractsWithHttp,
        InteractsWithPools,
        InteractsWithRpcClient,
        InteractsWithRpcServer,
        InteractsWithQueue,
        InteractsWithTracing,
        WithContainer,
        WithApplication;

    /**
     * Initialize.
     */
    protected function initialize(): void
    {
        $this->prepareTables();
        $this->preparePools();
        $this->prepareHttp();
        $this->prepareRpcServer();
        $this->prepareQueue();
        $this->prepareRpcClient();
        $this->prepareTracing();
    }

}
