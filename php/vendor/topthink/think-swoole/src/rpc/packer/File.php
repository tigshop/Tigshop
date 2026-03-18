<?php

namespace think\swoole\rpc\packer;

class File
{
    protected $name;
    protected $handle;
    protected $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function write(&$data)
    {
        if (!$this->handle) {
            $this->name   = tempnam(sys_get_temp_dir(), 'swoole_rpc_');
            $this->handle = fopen($this->name, 'ab');
        }

        $size   = fstat($this->handle)['size'];
        $string = substr($data, 0, $this->length - $size);

        fwrite($this->handle, $string);

        if (strlen($data) >= $this->length - $size) {
            fclose($this->handle);
            $data = substr($data, $this->length - $size);

            return new \think\swoole\rpc\File($this->name);
        } else {
            $data = '';
        }
    }
}
