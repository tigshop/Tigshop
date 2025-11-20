<?php

declare(strict_types=1);

namespace Swoole;

use Swoole\Connection\Iterator;
use Swoole\Coroutine\Http\Server as AdminServer;
use Swoole\Server\Port;

/**
 * The Swoole Server class.
 *
 * There are five types of processes in Swoole server:
 *   - Master process.
 *   - Manager process. Optional.
 *   - Event worker processes. All requests (HTTP, WebSocket, TCP, UDP, etc.) are handled by this type of processes. It supports
 *     coroutine by default.
 *   - Task worker processes. Optional. This type of processes was introduced to handle blocking I/O operations in PHP. Ideally, it
 *     should always work synchronously, although it also supports coroutine and allows asynchronous processing (since Swoole 4.2.12).
 *     The number of task worker processes is set by option \Swoole\Constant::OPTION_TASK_WORKER_NUM before starting the server.
 *   - User processes. Optional. These are self-defined processes attached to the server through method \Swoole\Server::addProcess().
 *
 * History Changes:
 * 1. Following alias methods have been removed from Swoole 5.0.0. Please use the original methods instead.
 *    * \Swoole\Server::after()      => \Swoole\Timer::after().
 *    * \Swoole\Server::clearTimer() => \Swoole\Timer::clearTimer().
 *    * \Swoole\Server::tick()       => \Swoole\Timer::tick().
 *    * \Swoole\Server::defer()      => \Swoole\Event::defer().
 * 2. Starting from Swoole 5.0.0, default server mode has been changed from SWOOLE_PROCESS to SWOOLE_BASE.
 *
 * @not-serializable Objects of this class cannot be serialized.
 */
class Server
{
    public $setting;

    public Iterator $connections;

    /**
     * IP address of the network socket, or path of the UNIX domain socket bound to the primary port.
     *
     * If the $sock_type parameter is set to SWOOLE_SOCK_UNIX_STREAM or SWOOLE_SOCK_UNIX_DGRAM in the constructor when
     * creating a Server object, the $host parameter must be set to the path of the UNIX domain socket. Otherwise,
     * the $host parameter must be set to the IP address of the network socket.
     *
     * When setting to the IP address of the network socket, it can be either an IPv4 or IPv6 address:
     * - For IPv4,
     *     - use 127.0.0.1 to listen on the local loopback interface.
     *     - use 0.0.0.0 to listen on all network interfaces.
     * - For IPv6,
     *     - use ::1 to listen on the local loopback interface.
     *     - use :: to listen on all network interfaces.
     */
    public string $host = '';

    /**
     * The primary port of the server. It's the port number actually assigned when creating a Server object.
     */
    public int $port = 0;

    /**
     * Type of the socket bound to the primary port.
     *
     * It can be one of the following values:
     *   - SWOOLE_SOCK_TCP
     *   - SWOOLE_SOCK_UDP
     *   - SWOOLE_SOCK_TCP6
     *   - SWOOLE_SOCK_UDP6
     *   - SWOOLE_SOCK_UNIX_STREAM
     *   - SWOOLE_SOCK_UNIX_DGRAM
     * In addition to specifying a socket type, it may include the bitwise OR of SWOOLE_SSL to enable SSL encryption for
     * network sockets (SWOOLE_SOCK_TCP, SWOOLE_SOCK_UDP, SWOOLE_SOCK_TCP6, and SWOOLE_SOCK_UDP6).
     * Thus, the value of $type could be in the format of either of the following:
     *   - SWOOLE_SOCK_TCP
     *   - SWOOLE_SOCK_TCP | SWOOLE_SSL
     *
     * If SWOOLE_SSL is included, the server must have the following options set properly before starting:
     *   - \Swoole\Constant::OPTION_SSL_CERT_FILE
     *   - \Swoole\Constant::OPTION_SSL_KEY_FILE
     *
     * @see SWOOLE_SOCK_TCP
     * @see SWOOLE_SOCK_UDP
     * @see SWOOLE_SOCK_TCP6
     * @see SWOOLE_SOCK_UDP6
     * @see SWOOLE_SOCK_UNIX_STREAM
     * @see SWOOLE_SOCK_UNIX_DGRAM
     * @see SWOOLE_SSL
     */
    public int $type = 0;

    /**
     * If SSL is enabled or not on the primary port.
     *
     * @since 5.0.0
     */
    public bool $ssl = false;

    public $mode = 0;

    public $ports;

    /**
     * Process ID of the master process.
     */
    public $master_pid = 0;

    /**
     * Process ID of the manager process.
     */
    public $manager_pid = 0;

    public $worker_id = -1;

    public $taskworker = false;

    public $worker_pid = 0;

    public $stats_timer;

    /**
     * @since 4.8.0
     */
    public AdminServer $admin_server;

    /**
     * @var callable
     */
    private $onStart;

    /**
     * @var callable
     * @since 4.8.0
     */
    private $onBeforeShutdown;

    /**
     * @var callable
     */
    private $onShutdown;

    /**
     * @var callable
     */
    private $onWorkerStart;

    /**
     * @var callable
     */
    private $onWorkerStop;

    /**
     * @var callable
     * @since 4.5.0
     */
    private $onBeforeReload;

    /**
     * @var callable
     * @since 4.5.0
     */
    private $onAfterReload;

    /**
     * @var callable
     */
    private $onWorkerExit;

    /**
     * @var callable
     */
    private $onWorkerError;

    /**
     * @var callable
     */
    private $onTask;

    /**
     * @var callable
     */
    private $onFinish;

    /**
     * @var callable
     */
    private $onManagerStart;

    /**
     * @var callable
     */
    private $onManagerStop;

    /**
     * @var callable
     */
    private $onPipeMessage;

    /**
     * Constructor of the Swoole Server class.
     *
     * @param string $host IP address of the network socket, or path of the UNIX domain socket bound to the primary port. For details, please check property \Swoole\Server::$host.
     * @param int $port The primary port of the server. This parameter is ignored if $sock_type is SWOOLE_SOCK_UNIX_STREAM or SWOOLE_SOCK_UNIX_DGRAM.
     * @param int $mode Must be either SWOOLE_BASE or SWOOLE_PROCESS. Starting from Swoole 5.0.0, default server mode has been
     *                  changed from SWOOLE_PROCESS to SWOOLE_BASE.
     * @param int $sock_type Type of the socket. For details, please check property \Swoole\Server::$type.
     */
    public function __construct(string $host = '0.0.0.0', int $port = 0, int $mode = SWOOLE_BASE, int $sock_type = SWOOLE_SOCK_TCP)
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Server::addlistener().
     * @see \Swoole\Server::addlistener()
     * @see \Swoole\Server::getClientInfo()
     */
    public function listen(string $host, int $port, int $sock_type): Port|false
    {
    }

    /**
     * @alias Alias of method \Swoole\Server::listen().
     * @see \Swoole\Server::listen()
     * @see \Swoole\Server::getClientInfo()
     */
    public function addlistener(string $host, int $port, int $sock_type): Port|false
    {
    }

    public function on(string $event_name, callable $callback): bool
    {
    }

    public function getCallback(string $event_name): \Closure|string|array|null
    {
    }

    public function set(array $settings): bool
    {
    }

    public function start(): bool
    {
    }

    public function send(int|string $fd, string $send_data, int $serverSocket = -1): bool
    {
    }

    public function sendto(string $ip, int $port, string $send_data, int $server_socket = -1): bool
    {
    }

    public function sendwait(int $conn_fd, string $send_data): bool
    {
    }

    /**
     * Check if a connection exists.
     *
     * @param int $fd The connection file descriptor.
     * @return bool Returns true if the connection exists, or false if the connection does not exist or has been closed.
     * @alias This method has an alias of \Swoole\Server::exist().
     * @see \Swoole\Server::exist()
     */
    public function exists(int $fd): bool
    {
    }

    /**
     * Check if a connection exists.
     *
     * @param int $fd The connection file descriptor.
     * @return bool Returns true if the connection exists, or false if the connection does not exist or has been closed.
     * @alias Alias of method \Swoole\Server::exists().
     * @see \Swoole\Server::exists()
     */
    public function exist(int $fd): bool
    {
    }

    public function protect(int $fd, bool $is_protected = true): bool
    {
    }

    public function sendfile(int $conn_fd, string $filename, int $offset = 0, int $length = 0): bool
    {
    }

    public function close(int $fd, bool $reset = false): bool
    {
    }

    /**
     * Confirm current client-side connection and start receiving client-side data. This method is to protect the
     * server from DDoS attacks.
     *
     * @alias Although this method and method \Swoole\Server::resume() are used for different purposes, they are
     *        implemented exactly the same in Swoole.
     * @see \Swoole\Server::resume()
     * @see https://github.com/deminy/swoole-by-examples/blob/master/examples/servers/ddos-protection.php Example of DDoS protection using this method
     */
    public function confirm(int $fd): bool
    {
    }

    /**
     * Pause receiving client-side data.
     *
     * @param int $fd File descriptor of the connection.
     * @return bool Returns true on success, or false on failure.
     * @see \Swoole\Server::resume()
     */
    public function pause(int $fd): bool
    {
    }

    /**
     * Resume receiving client-side data.
     *
     * @param int $fd File descriptor of the connection.
     * @return bool Returns true on success, or false on failure.
     * @see \Swoole\Server::pause()
     */
    public function resume(int $fd): bool
    {
    }

    /**
     * @param int $taskWorkerIndex ID of the task worker to which the task is assigned. If it is -1, Swoole will randomly pick an idle task worker.
     *                             Please note that task ID starts from 0; it ranges from 0 to $this->setting[\Swoole\Constant::OPTION_TASK_WORKER_NUM] - 1].
     * @return int|false Returns the task ID on success, or false on failure.
     */
    public function task(mixed $data, int $taskWorkerIndex = -1, ?callable $finishCallback = null): int|false
    {
    }

    /**
     * @param float $timeout The default value (0.5) is hardcoded in Swoole.
     * @param int $taskWorkerIndex ID of the task worker to which the task is assigned. If it is -1, Swoole will randomly pick an idle task worker.
     *                             Please note that task ID starts from 0; it ranges from 0 to $this->setting[\Swoole\Constant::OPTION_TASK_WORKER_NUM] - 1].
     * @return string|false Return FALSE when error happens.
     */
    public function taskwait(mixed $data, float $timeout = 0.5, int $taskWorkerIndex = -1): string|false
    {
    }

    /**
     * Dispatch tasks to task worker processes.
     *
     * This method can be used only when the server has task worker processes included/created. i.e., the server should
     * have option \Swoole\Constant::OPTION_TASK_WORKER_NUM set to a value greater than 0.
     *
     * Before Swoole 4.8.12+ and 5.0.1+, this method doesn't support coroutine. If the server is running with option
     * Swoole\Constant::OPTION_TASK_ENABLE_COROUTINE set to true, use method Server::taskCo() instead.
     *
     * Method \Swoole\Server::taskWaitMulti() works exactly the same as method \Swoole\Server::taskCo() when all the
     * following conditions are met:
     *   - used in Swoole 4.8.12+ or 5.0.1+.
     *   - server option \Swoole\Constant::OPTION_TASK_ENABLE_COROUTINE is set to TRUE.
     *
     * @param mixed[] $tasks List of tasks to be dispatched. Maximum number of tasks: 1024.
     * @param float $timeout The maximum waiting time (in seconds) for the task results. If the timeout is exceeded, results of unfinished tasks will be discarded.
     * @return mixed[]|false Return an array of task results, or false on failure. For details, please check the pseudocode included in this method.
     * @see \Swoole\Server::taskCo()
     * @pseudocode-included This is a built-in method in Swoole. The PHP code included inside this method is for explanation purpose only.
     */
    public function taskWaitMulti(array $tasks, float $timeout = 0.5): array|false
    {
        if (!empty($this->setting[Constant::OPTION_TASK_ENABLE_COROUTINE])) { // Task worker processes have coroutine enabled.
            if (SWOOLE_MAJOR_VERSION < 5) {
                if (version_compare(SWOOLE_VERSION, '4.8.12', '>=')) { // If Swoole version is 4.8.12 or later, but less than 5.0.0.
                    return $this->taskCo($tasks, $timeout);
                }
            } else {
                if (version_compare(SWOOLE_VERSION, '5.0.1', '>=')) { // If Swoole version is 5.0.1 or later.
                    return $this->taskCo($tasks, $timeout);
                }
            }
        }

        // Now, the server dispatches tasks to task worker processes and waits for the results.

        // Finally, let's see how the return value looks like.

        // Variable $tasks denotes an array of tasks to be dispatched, which may succeed, timeout, or fail.
        $tasks = [
            0 => 'a successfully finished task',
            1 => 'a timeout task',
            2 => 'a failed task',
        ];

        // When timeout is exceeded or all the tasks are completed, this method returns an array of task results (here we assume the return value is $results):
        //   - The array of task results matches the order of the tasks in the $tasks parameter. e.g., $results[0] is the result of $tasks[0].
        //   - If a task exceeds the timeout, it won't be included in the return value. e.g., $results[1] is not set (included) since $tasks[1] exceeds the timeout.
        //   - If a task fails, the corresponding result will be false. e.g., $results[2] is false since $tasks[2] fails.
        return [
            0 => 'a successfully finished task',
            2 => false,
        ];
    }

    /**
     * To dispatch tasks to task worker processes, with the following constraints applied:
     *   - The server should have option \Swoole\Constant::OPTION_TASK_WORKER_NUM set to a value greater than 0.
     *   - The server should have option \Swoole\Constant::OPTION_TASK_ENABLE_COROUTINE set to true.
     *
     * Here is a piece of code to illustrate how to configure the server before using this method:
     *   $server = new \Swoole\Server('0.0.0.0', 9501);
     *   $server->set(
     *     [
     *       \Swoole\Constant::OPTION_TASK_WORKER_NUM       => 3,    // Have three task worker processes included/created.
     *       \Swoole\Constant::OPTION_TASK_ENABLE_COROUTINE => true, // Support coroutine in task worker processes.
     *       // ...
     *     ]
     *   );
     *
     * Method \Swoole\Server::taskCo() works exactly the same as method \Swoole\Server::taskWaitMulti() when all the
     * following conditions are met:
     *   - used in Swoole 4.8.12+ or 5.0.1+.
     *   - server option \Swoole\Constant::OPTION_TASK_ENABLE_COROUTINE is set to TRUE.
     *
     * @param mixed[] $tasks List of tasks to be dispatched. Maximum number of tasks: 1024.
     * @param float $timeout The maximum waiting time (in seconds) for the task results. If the timeout is exceeded, results of unfinished tasks will be discarded.
     * @return mixed[]|false Return an array of task results, or false on failure. For details, please check the pseudocode included in this method.
     * @see \Swoole\Server::taskWaitMulti()
     * @pseudocode-included This is a built-in method in Swoole. The PHP code included inside this method is for explanation purpose only.
     */
    public function taskCo(array $tasks, float $timeout = 0.5): array|false
    {
        // The pseudocode here shows how the return value looks like.

        // Variable $tasks denotes an array of tasks to be dispatched, which may succeed, timeout, or fail.
        $tasks = [
            0 => 'a successfully finished task',
            1 => 'a timeout task',
            2 => 'a failed task',
        ];

        // When timeout is exceeded or all the tasks are completed, this method returns an array of task results (here we assume the return value is $results):
        //   - The array of task results matches the order of the tasks in the $tasks parameter. e.g., $results[0] is the result of $tasks[0].
        //   - If a task fails or exceeds the timeout, the corresponding result will be false. e.g., $results[1] is false since $tasks[1] exceeds the timeout.
        return [
            0 => 'result of $tasks[0]',
            1 => false,
            2 => false,
        ];
    }

    public function finish(mixed $data): bool
    {
    }

    public function reload(bool $only_reload_taskworker = false): bool
    {
    }

    /**
     * Shutdown the server.
     *
     * This method has the same effect as the following command line commands:
     *   - kill -SIGTERM $master_pid
     *   - kill -15      $master_pid
     * The above commands send TERM signals to the master process of the Swoole server. $master_pid is the process ID of
     * the master process.
     *
     * This method can be called from worker processes.
     *
     * @return bool TRUE on success, FALSE on failure.
     */
    public function shutdown(): bool
    {
    }

    public function stop(int $workerId = -1, bool $waitEvent = false): bool
    {
    }

    /**
     * Get the error code of the latest failed operation.
     *
     * To translate the error code to an error message, use the following statement:
     *     \swoole_strerror($server->getLastError(), SWOOLE_STRERROR_SWOOLE);
     *
     * @alias This method is an alias of function \swoole_last_error().
     * @see \swoole_last_error()
     * @see \swoole_strerror()
     */
    public function getLastError(): int
    {
    }

    public function heartbeat(bool $ifCloseConnection = true): array|false
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Server::connection_info().
     * @see \Swoole\Server::connection_info()
     */
    public function getClientInfo(int $fd, int $reactor_id = -1, bool $ignoreError = false): array|false
    {
    }

    /**
     * @alias This method has an alias of \Swoole\Server::connection_list().
     * @see \Swoole\Server::connection_list()
     */
    public function getClientList(int $start_fd = 0, int $find_count = 10): array|false
    {
    }

    /**
     * Get the ID of current worker (either an event worker or a task worker).
     *
     * @return int|false Returns the ID of current worker. Returns false if not called within a worker process (either
     *                   an event worker process or a task worker process).
     * @since 4.5.0
     */
    public function getWorkerId(): int|false
    {
    }

    /**
     * Get the process ID of a given worker process (specified by a worker ID).
     *
     * @return int|false Returns the process ID of a given worker process (specified by a worker ID). If the worker ID
     *                   is a negative integer or not passed in, returns the process ID of current worker process.
     *                   Returns false if something wrong happens (e.g., the worker process doesn't exist, or an invalid
     *                   worker ID specified.).
     * @since 4.5.0
     */
    public function getWorkerPid(int $worker_id = -1): int|false
    {
    }

    /**
     * @since 4.5.0
     */
    public function getWorkerStatus(int $worker_id = -1): int|false
    {
    }

    /**
     * @since 4.5.0
     */
    public function getManagerPid(): int
    {
    }

    /**
     * @since 4.5.0
     */
    public function getMasterPid(): int
    {
    }

    /**
     * @alias Alias of method \Swoole\Server::getClientInfo().
     * @see \Swoole\Server::getClientInfo()
     */
    public function connection_info(int $fd, int $reactor_id = -1, bool $ignoreError = false): array|false
    {
    }

    /**
     * @alias Alias of method \Swoole\Server::getClientList().
     * @see \Swoole\Server::getClientList()
     */
    public function connection_list(int $start_fd = 0, int $find_count = 10): array|false
    {
    }

    public function sendMessage(mixed $message, int $dst_worker_id): bool
    {
    }

    /**
     * Run a customized command in a specified process of Swoole.
     *
     * @param bool $json_encode If the callback function of the command returns a JSON encoded string back, it can be decoded automatically by setting this parameter to TRUE.
     * @see \Swoole\Server::addCommand()
     * @since 4.8.0
     */
    public function command(string $name, int $process_id, int $process_type, mixed $data, bool $json_decode = true): string|array|false
    {
    }

    /**
     * Add a customized command.
     *
     * Commands can be added to the master process, the manager process, or worker processes. Commands can only be added
     * before the server is started.
     *
     * @param int $accepted_process_types One or multiple types of processes. e.g., "SWOOLE_SERVER_COMMAND_EVENT_WORKER | SWOOLE_SERVER_COMMAND_TASK_WORKER".
     * @param callable $callback The callback function should return a (serialized) string back.
     * @return bool TRUE if succeeds, otherwise FALSE.
     * @see \Swoole\Server::command()
     * @see SWOOLE_SERVER_COMMAND_MASTER
     * @see SWOOLE_SERVER_COMMAND_MANAGER
     * @see SWOOLE_SERVER_COMMAND_EVENT_WORKER
     * @see SWOOLE_SERVER_COMMAND_TASK_WORKER
     * @since 4.8.0
     */
    public function addCommand(string $name, int $accepted_process_types, callable $callback): bool
    {
    }

    /**
     * @return int|false Return the ID of the process (\Swoole\Process::$id) back if succeeds; otherwise return FALSE.
     * @see \Swoole\Process::$id
     */
    public function addProcess(Process $process): int
    {
    }

    public function stats(): array
    {
    }

    /**
     * Get the socket handle bound to the given port of the server.
     *
     * This method is available only when Swoole is installed with option "--enable-sockets" included.
     *
     * @param int $port Port number. Use the default port number (specified in the constructor) if not passed in or passed in as 0.
     * @return \Socket|false Returns a Socket object on success; otherwise FALSE.
     */
    public function getSocket(int $port = 0): \Socket|false
    {
    }

    public function bind(int $fd, int $uid): bool
    {
    }
}
