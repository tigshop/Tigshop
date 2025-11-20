<?php

use Swoole\Coroutine;
use Swoole\Timer;
use think\swoole\Watcher;
use think\swoole\watcher\Driver;
use function Swoole\Coroutine\run;

beforeEach(function () {
    app()->config->set([
        'hot_update' => [
            'name'    => ['*.txt'],
            'include' => [runtime_path()],
            'exclude' => [],
        ],
    ], 'swoole');
});

it('test fswatch watcher', function ($type) {
    run(function () use ($type) {
        $monitor = app(Watcher::class)->monitor($type);
        expect($monitor)->toBeInstanceOf(Driver::class);

        $changes = [];
        Coroutine::create(function () use (&$changes, $monitor) {
            $monitor->watch(function ($data) use (&$changes) {
                $changes = array_merge($changes, $data);
            });
        });
        Timer::after(500, function () {
            file_put_contents(runtime_path() . 'some.css', 'test');
            file_put_contents(runtime_path() . 'test.txt', 'test');
        });

        sleep(3);

        expect($changes)->toBe([runtime_path() . 'test.txt']);
        $monitor->stop();
    });
})->with([
    'find',
    'fswatch',
    'scan',
])->after(function () {
    @unlink(runtime_path() . 'test.css');
    @unlink(runtime_path() . 'test.txt');
});
