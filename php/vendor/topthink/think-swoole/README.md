ThinkPHP Swoole 扩展
===============

交流群：787100169 [![点击加群](https://pub.idqqimg.com/wpa/images/group.png "点击加群")](https://jq.qq.com/?_wv=1027&k=VRcdnUKL)

## 安装

首先按照Swoole官网说明安装swoole扩展，然后使用

~~~
composer require topthink/think-swoole
~~~

安装swoole扩展。

## 使用方法

直接在命令行下启动HTTP服务端。

~~~
php think swoole
~~~

启动完成后，默认会在0.0.0.0:8080启动一个HTTP Server，可以直接访问当前的应用。

swoole的相关参数可以在`config/swoole.php`里面配置（具体参考配置文件内容）。

如果需要使用守护进程方式运行，建议使用supervisor来管理进程

## 访问静态文件
> 4.0开始协程风格服务端默认不支持静态文件访问，建议使用nginx来支持静态文件访问，也可使用路由输出文件内容，下面是示例，可参照修改
1. 添加静态文件路由：

```php
Route::get('static/:path', function (string $path) {
    $filename = public_path() . $path;
    return new \think\swoole\response\File($filename);
})->pattern(['path' => '.*\.\w+$']);
```

2. 访问路由 `http://localhost/static/文件路径`

## 队列支持

> 4.0开始协程风格服务端没有task进程了，使用think-queue代替

使用方法见 [think-queue](https://github.com/top-think/think-queue)

以下配置代替think-queue里的最后一步:`监听任务并执行`,无需另外起进程执行队列

```php
return [
    // ...
    'queue'      => [
        'enable'  => true,
        //键名是队列名称
        'workers' => [
            //下面参数是不设置时的默认配置
            'default'            => [
                'delay'      => 0,
                'sleep'      => 3,
                'tries'      => 0,
                'timeout'    => 60,
                'worker_num' => 1,
            ],
            //使用@符号后面可指定队列使用驱动
            'default@connection' => [
                //此处可不设置任何参数，使用上面的默认配置
            ],
        ],
    ],
    // ...
];

```

## 支持`symfony/var-dumper`

由于应用是通过php cli启动的，所以默认`symfony/var-dumper`会将调试信息打印在控制台, 通过配置中间件来支持将调试信息输出在网页上 如下是直接在配置在全局中间件上，也可以在路由定义的时候配置

```php
// app/middleware.php

<?php
// 全局中间件定义文件
return [
    // 全局请求缓存
    // \think\middleware\CheckRequestCache::class,
    // 多语言加载
    // \think\middleware\LoadLangPack::class,
    // Session初始化
    //\think\middleware\SessionInit::class,
    \think\swoole\middleware\InteractsWithVarDumper::class,
];
```
