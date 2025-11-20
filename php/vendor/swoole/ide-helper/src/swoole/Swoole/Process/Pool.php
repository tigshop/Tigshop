<?php

declare(strict_types=1);

namespace Swoole\Process;

use Swoole\Process;

/**
 * @not-serializable Objects of this class cannot be serialized.
 */
class Pool
{
    /**
     * Process ID of the master process of the pool. The master process is the process where the Pool object is created.
     *
     * This property will be set to a positive integer when method \Swoole\Process\Pool::start() is called successfully.
     *
     * @since 4.3.2
     */
    public int $master_pid = -1;

    /**
     * List of the worker processes.
     *
     * A worker process is added to this list only when the process is return from an explicit method call to \Swoole\Process\Pool::getProcess(). Thus, this property may not have all the worker processes included.
     *
     * @var Process[]|null
     * @see \Swoole\Process\Pool::getProcess()
     * @since 4.4.0
     */
    public ?array $workers;

    public function __construct(int $worker_num, int $ipc_type = SWOOLE_IPC_NONE, int $msgqueue_key = 0, bool $enable_coroutine = false)
    {
    }

    /**
     * @since 4.4.4
     */
    public function set(array $settings): void
    {
    }

    public function on(string $name, callable $callback): bool
    {
    }

    /**
     * Return the worker process by its ID.
     *
     * The ID of a worker process is the index of the worker process in the pool. The ID of the first worker process is
     * 0, and the ID of the last worker process is the number of worker processes minus 1.
     *
     * During the life cycle of a pool, new worker processes are created when the old ones are stopped. That way, there
     * are always same amount of worker processes in the pool. The Process object returned by this method is always the
     * same one as long as the ID is the same, even if the process is stopped and recreated.
     *
     * Worker processes are created when method \Swoole\Process\Pool::start() is called successfully. Thus, this method
     * should only be called after method \Swoole\Process\Pool::start() has been called, and it should be called in the
     * callback functions of worker processes, e.g., onWorkerStart.
     *
     * @param int $work_id ID of the work process to get.
     *                     - It should be greater than or equal to 0 and less than the number of worker processes in the pool.
     *                     - If it's not passed or a negative integer is passed, ID of the current worker process will be used.
     * @return Process|false Returns a worker process object back; returns false if the worker process doesn't exist.
     */
    public function getProcess(int $work_id = -1): Process|false
    {
    }

    public function listen(string $host, int $port = 0, int $backlog = 2048): bool
    {
    }

    public function write(string $data): bool
    {
    }

    public function sendMessage(string $data, int $dst_worker_id): bool
    {
    }

    public function detach(): bool
    {
    }

    /**
     * @return false|null
     */
    public function start()
    {
    }

    /**
     * @since 4.7.0
     */
    public function stop(): void
    {
    }

    /**
     * Shutdown the process pool.
     *
     * All this method does is to send a SIGTERM signal to the master process of the pool. It will kill the master
     * process and all worker processes.
     *
     * @return bool TRUE on success, FALSE on failure.
     * @since 4.3.2
     */
    public function shutdown(): bool
    {
    }
}
