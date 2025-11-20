<?php

declare(strict_types=1);

namespace Swoole\Server;

/**
 * When an event worker process or a task worker process crashes, an onWorkerError event will be triggered in the manager
 * process, with a StatusInfo object as the second parameter. The StatusInfo object can be used to log the issue and
 * send out alerts.
 *
 * @example
 * <pre>
 * $server->on('WorkerError', function (Swoole\Server $serv, Swoole\Server\StatusInfo $info) {
 *   var_dump($info);
 * });
 * <pre>
 */
class StatusInfo
{
    /**
     * @var int ID of the worker.
     */
    public int $worker_id = 0;

    /**
     * @var int Process ID of the worker.
     */
    public int $worker_pid = 0;

    /**
     * @var int The status field that was filled in by the waitpid function after the worker process was created.
     */
    public int $status = 0;

    /**
     * @var int Exit status of the worker process.
     */
    public int $exit_code = 0;

    /**
     * @var int The signal that caused the worker process to exit.
     */
    public int $signal = 0;
}
