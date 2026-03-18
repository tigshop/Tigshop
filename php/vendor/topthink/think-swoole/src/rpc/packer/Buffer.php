<?php

namespace think\swoole\rpc\packer;

class Buffer
{
    protected $data = '';
    protected $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function write(&$data)
    {
        $size   = strlen($this->data);
        $string = substr($data, 0, $this->length - $size);

        $this->data .= $string;

        if (strlen($data) >= $this->length - $size) {
            $data = substr($data, $this->length - $size);

            return $this->data;
        } else {
            $data = '';
        }
    }
}
