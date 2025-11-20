<?php


namespace thans\jwt\provider\storage;


use thans\jwt\contract\Storage;
use think\facade\Cache;

class Tp5 implements Storage
{
    public function delete($key)
    {
        return Cache::rm($key);
    }

    public function get($key)
    {
        return Cache::get($key);
    }

    public function set($key, $val, $time = 0)
    {
        return Cache::set($key, $val, $time);
    }
}