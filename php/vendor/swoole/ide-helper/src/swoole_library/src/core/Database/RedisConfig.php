<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole\Database;

class RedisConfig
{
    /** @var string */
    protected $host = '127.0.0.1';

    /** @var int */
    protected $port = 6379;

    /** @var float */
    protected $timeout = 0.0;

    /** @var string */
    protected $reserved = '';

    /** @var int */
    protected $retry_interval = 0;

    /** @var float */
    protected $read_timeout = 0.0;

    /** @var string */
    protected $auth = '';

    /** @var int */
    protected $dbIndex = 0;

    public function getHost()
    {
        return $this->host;
    }

    public function withHost($host): self
    {
        $this->host = $host;
        return $this;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function withPort(int $port): self
    {
        $this->port = $port;
        return $this;
    }

    public function getTimeout(): float
    {
        return $this->timeout;
    }

    public function withTimeout(float $timeout): self
    {
        $this->timeout = $timeout;
        return $this;
    }

    public function getReserved(): string
    {
        return $this->reserved;
    }

    public function withReserved(string $reserved): self
    {
        $this->reserved = $reserved;
        return $this;
    }

    public function getRetryInterval(): int
    {
        return $this->retry_interval;
    }

    public function withRetryInterval(int $retry_interval): self
    {
        $this->retry_interval = $retry_interval;
        return $this;
    }

    public function getReadTimeout(): float
    {
        return $this->read_timeout;
    }

    public function withReadTimeout(float $read_timeout): self
    {
        $this->read_timeout = $read_timeout;
        return $this;
    }

    public function getAuth(): string
    {
        return $this->auth;
    }

    public function withAuth(string $auth): self
    {
        $this->auth = $auth;
        return $this;
    }

    public function getDbIndex(): int
    {
        return $this->dbIndex;
    }

    public function withDbIndex(int $dbIndex): self
    {
        $this->dbIndex = $dbIndex;
        return $this;
    }
}
