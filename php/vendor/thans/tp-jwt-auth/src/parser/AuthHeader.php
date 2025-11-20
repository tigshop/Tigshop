<?php


namespace thans\jwt\parser;

use thans\jwt\contract\Parser as ParserContract;
use think\Request;

class AuthHeader implements ParserContract
{
    protected $header = 'authorization';

    protected $prefix = 'bearer';

    public function parse(Request $request)
    {
        $header = $request->header($this->header);
        if ($header
            && preg_match('/'.$this->prefix.'\s*(\S+)\b/i', $header, $matches)
        ) {
            return $matches[1];
        }
    }

    public function setHeaderName($name)
    {
        $this->header = $name;

        return $this;
    }

    public function setHeaderPrefix($prefix)
    {
        $this->prefix = $prefix;

        return $this;
    }
}
