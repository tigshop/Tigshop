<?php

namespace app\controller;

use think\facade\Cookie;
use think\Request;

class Index
{
    public function test()
    {
        Cookie::set('name', 'think');
        return 'test';
    }

    public function json(Request $request)
    {
        return json($request->post());
    }
}
