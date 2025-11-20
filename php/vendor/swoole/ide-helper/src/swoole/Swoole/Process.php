<?php

declare(strict_types=1);

namespace Swoole;

use Swoole\Coroutine\Socket;

/**
 * @not-serializable Objects of this class cannot be serialized.
 */
class Process
{
    public const IPC_NOWAIT = 256;

    public const PIPE_MASTER = 1;

    public const PIPE_WORKER = 2;

    public const PIPE_READ = 3;

    public const PIPE_WRITE = 4;

    public int $pipe;

    public $msgQueueId;

    public $msgQueueKey;

    /**
     * Process ID. This is to uniquely identify the process in the OS.
     */
    public int $pid;

    /**
     * ID of the process.
     *
     * In a Swoole program (e.g., a Swoole-based server), there are different types of processes, including event worker
     * processes, task worker processes, and user worker processes. This ID is to uniquely identify the process in the
     * running Swoole program.
     */
    public int $id;

    private $callback;

    public function __construct(callable $callback, bool $redirect_stdin_and_stdout = false, int $pipe_type = 2, bool $enable_coroutine = false)
    {
    }

    /**
     * Set process scheduling priority.
     *
     * Parameter $who is added in Swoole 5.0.2. Prior to this version, this method can only be used to set the priority
     * of the current process through method call $this->setPriority(PRIO_PROCESS, $priority).
     *
     * @param int $which One of the following three constants:
     *                   - PRIO_PROCESS: Set the priority of the process specified.
     *                   - PRIO_PGRP: Set the priority of all the processes in the process group specified.
     *                   - PRIO_USER: Set the priority of all the processes owned by the user specified.
     * @param int $priority The priority value. Lower priorities cause more favorable scheduling. The actual priority
     *                      range varies between systems. On Linux 1.3.43+, it's in the range -20 to 19.
     * @param int|null $who Interpreted relative to $which:
     *                      - PRIO_PROCESS: A process identifier.
     *                      - PRIO_PGRP: Process group identifier.
     *                      - PRIO_USER: An effective user ID.
     *                      This parameter can be ignored (or set to NULL) when $which is PRIO_PROCESS and $who
     *                      is $this->pid. In another word, the following two calls are equivalent:
     *                      - $this->setPriority(PRIO_PROCESS, $priority, $this->pid);
     *                      - $this->setPriority(PRIO_PROCESS, $priority);
     * @return bool Returns true on success or false on failure.
     * @see \Swoole\Process::getPriority()
     */
    public function setPriority(int $which, int $priority, ?int $who = null): bool
    {
    }

    /**
     * Get process scheduling priority.
     *
     * Parameter $who is added in Swoole 5.0.2. Prior to this version, this method can only be used to get the priority
     * of the current process through method call $this->getPriority(PRIO_PROCESS).
     *
     * @param int $which One of the three constants: PRIO_PROCESS, PRIO_PGRP, or PRIO_USER.
     * @param int|null $who Interpreted relative to $which:
     *                      - PRIO_PROCESS: A process identifier.
     *                      - PRIO_PGRP: Process group identifier.
     *                      - PRIO_USER: An effective user ID.
     *                      This parameter can be ignored (or set to NULL) when $which is PRIO_PROCESS and $who is
     *                      $this->pid. In another word, the following two calls are equivalent:
     *                      - $this->getPriority(PRIO_PROCESS, $this->pid);
     *                      - $this->getPriority(PRIO_PROCESS);
     * @return int|false The highest priority (lowest numerical value) enjoyed by any of the specified processes, or false on error.
     * @see \Swoole\Process::setPriority()
     */
    public function getPriority(int $which, ?int $who = null): int|false
    {
    }

    public function set(array $settings): void
    {
    }

    public function setTimeout(float $seconds): bool
    {
    }

    public function setBlocking(bool $blocking): void
    {
    }

    public function useQueue(int $key = 0, int $mode = 2, int $capacity = -1): bool
    {
    }

    public function statQueue(): array|false
    {
    }

    public function freeQueue(): bool
    {
    }

    public function start(): bool|int
    {
    }

    public function write(string $data): int|false
    {
    }

    public function close(int $which = 0): bool
    {
    }

    public function read(int $size = 8192): string|false
    {
    }

    public function push(string $data): bool
    {
    }

    public function pop(int $size = 65536): string|false
    {
    }

    /**
     * Terminates the process.
     *
     * @param int $exit_code The exit code of the process. It must be an integer in the range 0 to 255, otherwise it will be set to 1 implicitly.
     */
    public function exit(int $exit_code = 0): void
    {
    }

    public function exec(string $exec_file, array $args): bool
    {
    }

    public function exportSocket(): Socket|false
    {
    }

    /**
     * Set the process name.
     *
     * There isn't a method in Swoole to get the process name. You can use PHP function \cli_get_process_title() to get the process name.
     *
     * @param string $process_name The new process name.
     * @return bool Returns true on success or false on failure.
     * @alias This method is an alias of function \swoole_set_process_name().
     * @see \swoole_set_process_name()
     * @see https://www.php.net/cli_set_process_title
     * @see https://www.php.net/cli_get_process_title
     * @pseudocode-included This is a built-in method in Swoole. The PHP code included inside this method is for explanation purpose only.
     */
    public function name(string $process_name): bool
    {
        if (PHP_SAPI !== 'cli') {
            // An E_WARNING level error will be thrown out here.
            return false;
        }

        return \cli_set_process_title($process_name);
    }

    public static function wait(bool $blocking = true): array|false
    {
    }

    public static function signal(int $signal_no, ?callable $callback = null): bool
    {
    }

    public static function alarm(int $usec, int $type = 0): bool
    {
    }

    public static function kill(int $pid, int $signal_no = 15): bool
    {
    }

    public static function daemon(bool $nochdir = true, bool $noclose = true, array $pipes = []): bool
    {
    }
}
