<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole\Coroutine;

use Swoole\Coroutine;
use Swoole\Coroutine\Server\Connection;
use Swoole\Exception;

/* compatibility constant */
define('SWOOLE_COROUTINE_SOCKET_HAVE_SSL_HANDSHAKE', method_exists(Socket::class, 'sslHandshake'));

class Server
{
    /** @var string */
    public $host = '';

    /** @var int */
    public $port = 0;

    /** @var int */
    public $type = AF_INET;

    /** @var int */
    public $fd = -1;

    /** @var int */
    public $errCode = 0;

    /** @var array */
    public $setting = [];

    /** @var bool */
    protected $running = false;

    /** @var null|callable */
    protected $fn;

    /** @var Socket */
    protected $socket;

    /**
     * Server constructor.
     * @throws Exception
     */
    public function __construct(string $host, int $port = 0, bool $ssl = false, bool $reuse_port = false)
    {
        $_host = swoole_string($host);
        if ($_host->contains('::')) {
            $this->type = AF_INET6;
        } elseif ($_host->startsWith('unix:/')) {
            $host = $_host->substr(5)->__toString();
            $this->type = AF_UNIX;
        } else {
            $this->type = AF_INET;
        }
        $this->host = $host;

        $socket = new Socket($this->type, SOCK_STREAM, 0);
        if ($reuse_port and defined('SO_REUSEPORT')) {
            $socket->setOption(SOL_SOCKET, SO_REUSEPORT, true);
        }
        if (!$socket->bind($this->host, $port)) {
            throw new Exception("bind({$this->host}:{$port}) failed", $socket->errCode);
        }
        if (!$socket->listen()) {
            throw new Exception('listen() failed', $socket->errCode);
        }
        $this->port = $socket->getsockname()['port'] ?? 0;
        $this->fd = $socket->fd;
        $this->socket = $socket;
        $this->setting['open_ssl'] = $ssl;
    }

    public function set(array $setting): void
    {
        $this->setting = array_merge($this->setting, $setting);
    }

    public function handle(callable $fn): void
    {
        $this->fn = $fn;
    }

    public function shutdown(): bool
    {
        $this->running = false;
        return $this->socket->cancel();
    }

    public function start(): bool
    {
        $this->running = true;
        if ($this->fn === null) {
            $this->errCode = SOCKET_EINVAL;
            return false;
        }
        $socket = $this->socket;
        if (!$socket->setProtocol($this->setting)) {
            $this->errCode = SOCKET_EINVAL;
            return false;
        }

        while ($this->running) {
            /** @var Socket $conn */
            $conn = null;
            $conn = $socket->accept();
            if ($conn) {
                $conn->setProtocol($this->setting);
                if (SWOOLE_COROUTINE_SOCKET_HAVE_SSL_HANDSHAKE && $this->setting['open_ssl'] ?? false) {
                    $fn = static function ($fn, $connection) {
                        /* @var $connection Connection */
                        if (!$connection->exportSocket()->sslHandshake()) {
                            return;
                        }
                        $fn($connection);
                    };
                    $arguments = [$this->fn, new Connection($conn)];
                } else {
                    $fn = $this->fn;
                    $arguments = [new Connection($conn)];
                }
                if (Coroutine::create($fn, ...$arguments) < 0) {
                    goto _wait;
                }
            } else {
                if ($socket->errCode == SOCKET_EMFILE or $socket->errCode == SOCKET_ENFILE) {
                    _wait:
                    Coroutine::sleep(1);
                    continue;
                }
                if ($socket->errCode == SOCKET_ETIMEDOUT) {
                    continue;
                }
                if ($socket->errCode == SOCKET_ECANCELED) {
                    break;
                }
                trigger_error("accept failed, Error: {$socket->errMsg}[{$socket->errCode}]", E_USER_WARNING);
                break;
            }
        }

        return true;
    }
}
