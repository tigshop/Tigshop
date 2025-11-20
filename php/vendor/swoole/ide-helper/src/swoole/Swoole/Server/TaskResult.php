<?php

declare(strict_types=1);

namespace Swoole\Server;

class TaskResult
{
    public int $task_id = 0;

    public int $task_worker_id = 0;

    public $dispatch_time = 0;

    public mixed $data;
}
