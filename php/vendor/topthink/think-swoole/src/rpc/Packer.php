<?php

namespace think\swoole\rpc;

use RuntimeException;
use think\swoole\rpc\packer\Buffer;
use think\swoole\rpc\packer\File;

class Packer
{
    public const HEADER_SIZE   = 8;
    public const HEADER_STRUCT = 'Nlength/Ntype';
    public const HEADER_PACK   = 'NN';

    public const TYPE_BUFFER = 0;
    public const TYPE_FILE   = 1;

    public static function pack($data, $type = self::TYPE_BUFFER)
    {
        return pack(self::HEADER_PACK, strlen($data), $type) . $data;
    }

    /**
     * @param $data
     * @return array<Buffer|File|string>
     */
    public static function unpack($data)
    {
        $header = unpack(self::HEADER_STRUCT, substr($data, 0, self::HEADER_SIZE));
        if ($header === false) {
            throw new RuntimeException('Invalid Header');
        }

        switch ($header['type']) {
            case Packer::TYPE_BUFFER:
                $handler = new Buffer($header['length']);
                break;
            case Packer::TYPE_FILE:
                $handler = new File($header['length']);
                break;
            default:
                throw new RuntimeException("unsupported data type: [{$header['type']}");
        }

        $data = substr($data, self::HEADER_SIZE);

        return [$handler, $data];
    }
}
