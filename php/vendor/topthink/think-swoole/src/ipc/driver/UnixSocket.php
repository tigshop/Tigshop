<?php

namespace think\swoole\ipc\driver;

use Swoole\Coroutine;
use Swoole\Event;
use Swoole\Process\Pool;
use think\swoole\coroutine\Barrier;
use think\swoole\ipc\Driver;
use think\swoole\packet\Buffer;
use Throwable;

class UnixSocket extends Driver
{
    public const HEADER_SIZE   = 8;
    public const HEADER_STRUCT = 'Nworker/Nlength';
    public const HEADER_PACK   = 'NN';

    /** @var Buffer[] */
    protected $packets = [];

    public function getType()
    {
        return SWOOLE_IPC_UNIXSOCK;
    }

    public function prepare(Pool $pool)
    {

    }

    public function subscribe()
    {
        Event::add($this->getSocket($this->workerId), function (Coroutine\Socket $socket) {
            $data   = $socket->recv();
            $length = strlen($data);
            if ($length == self::HEADER_SIZE) {
                $header = unpack(self::HEADER_STRUCT, $data);
                if ($header) {
                    $this->packets[$header['worker']] = new Buffer($header['length']);
                }
            } elseif ($length > self::HEADER_SIZE) {
                $header = unpack(self::HEADER_STRUCT, substr($data, 0, self::HEADER_SIZE));
                if ($header && !empty($this->packets[$header['worker']])) {
                    $packet = $this->packets[$header['worker']];
                    $data   = substr($data, self::HEADER_SIZE);
                    $response = $packet->write($data);
                    if ($response) {
                        unset($this->packets[$header['worker']]);
                        Coroutine::create(function () use ($response) {
                            try {
                                $message = unserialize($response);
                                $this->manager->triggerEvent('message', $message);
                            } catch (Throwable $e) {
                                $this->manager->logServerError($e);
                            }
                        });
                    }
                }
            }
        });
    }

    public function publish($workerId, $message)
    {
        Barrier::run(function () use ($workerId, $message) {
            $socket = $this->getSocket($workerId);

            $data = serialize($message);

            $header = pack(self::HEADER_PACK, $workerId, strlen($data));

            if (!$socket->send($header)) {
                return;
            }

            $dataSize  = strlen($data);
            $chunkSize = 1024 * 32;
            $sendSize  = 0;

            do {
                if (!$socket->send($header . substr($data, $sendSize, $chunkSize))) {
                    break;
                }
            } while (($sendSize += $chunkSize) < $dataSize);
        });
    }

    /**
     * @param $workerId
     * @return \Swoole\Coroutine\Socket
     */
    protected function getSocket($workerId)
    {
        return $this->manager->getPool()->getProcess($workerId)->exportSocket();
    }
}
