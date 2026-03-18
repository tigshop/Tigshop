<?php

namespace think\tests\swoole;

use PHPUnit\Framework\TestCase;
use think\swoole\Server;

class ServerTest extends TestCase
{
    public function testStart()
    {
        $server = new Server();

        $server->start();
    }
}
