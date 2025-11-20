<?php


namespace thans\jwt\parser;

use thans\jwt\contract\Parser as ParserContract;
use think\Request;

class Cookie implements ParserContract
{
    use KeyTrait;

    public function parse(Request $request)
    {
        return \think\facade\Cookie::get($this->key);
    }
}
