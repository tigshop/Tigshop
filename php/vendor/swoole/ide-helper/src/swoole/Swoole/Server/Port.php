<?php

declare(strict_types=1);

namespace Swoole\Server;

/**
 * @not-serializable Objects of this class cannot be serialized.
 */
class Port
{
    public string $host;

    public $port = 0;

    public $type = 0;

    public $sock = -1;

    public $ssl = false;

    public $setting;

    public Iterator $connections;

    /**
     * @var callable
     */
    private $onConnect;

    /**
     * @var callable
     */
    private $onReceive;

    /**
     * @var callable
     */
    private $onClose;

    /**
     * @var callable
     */
    private $onPacket;

    /**
     * @var callable
     */
    private $onBufferFull;

    /**
     * @var callable
     */
    private $onBufferEmpty;

    /**
     * @var callable
     */
    private $onRequest;

    /**
     * @var callable
     */
    private $onHandshake;

    /**
     * @var callable
     */
    private $onOpen;

    /**
     * @var callable
     */
    private $onMessage;

    /**
     * @var callable
     * @since 4.7.0
     */
    private $onDisconnect;

    /**
     * @var callable
     * @since 5.0.3
     */
    private $onBeforeHandshakeResponse;

    public function set(array $settings): void
    {
    }

    public function on(string $event_name, callable $callback): bool
    {
    }

    public function getCallback(string $event_name): ?callable
    {
    }

    /**
     * Get the socket handle bound to the port.
     *
     * This method is available only when Swoole is installed with option "--enable-sockets" included.
     *
     * @return \Socket|false Returns a Socket object on success; otherwise FALSE.
     */
    public function getSocket(): \Socket|false
    {
    }
}
