<?php

declare(strict_types=1);

namespace Swoole\Server;

class Event
{
    public int $reactor_id = 0;

    public int $fd = 0;

    public float $dispatch_time = 0;

    public string $data;
}
