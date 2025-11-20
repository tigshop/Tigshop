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

class PDOConfig
{
    public const DRIVER_MYSQL = 'mysql';

    protected string $driver = self::DRIVER_MYSQL;

    protected string $host = '127.0.0.1';

    protected int $port = 3306;

    protected ?string $unixSocket;

    protected string $dbname = 'test';

    protected string $charset = 'utf8mb4';

    protected string $username = 'root';

    protected string $password = 'root';

    protected array $options = [];

    public function getDriver(): string
    {
        return $this->driver;
    }

    public function withDriver(string $driver): self
    {
        $this->driver = $driver;
        return $this;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function withHost(string $host): self
    {
        $this->host = $host;
        return $this;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function hasUnixSocket(): bool
    {
        return !empty($this->unixSocket);
    }

    public function getUnixSocket(): ?string
    {
        return $this->unixSocket ?? null;
    }

    public function withUnixSocket(?string $unixSocket): self
    {
        $this->unixSocket = $unixSocket;
        return $this;
    }

    public function withPort(int $port): self
    {
        $this->port = $port;
        return $this;
    }

    public function getDbname(): string
    {
        return $this->dbname;
    }

    public function withDbname(string $dbname): self
    {
        $this->dbname = $dbname;
        return $this;
    }

    public function getCharset(): string
    {
        return $this->charset;
    }

    public function withCharset(string $charset): self
    {
        $this->charset = $charset;
        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function withUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function withPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function withOptions(array $options): self
    {
        $this->options = $options;
        return $this;
    }

    /**
     * Returns the list of available drivers
     *
     * @return string[]
     */
    public static function getAvailableDrivers(): array
    {
        return [
            self::DRIVER_MYSQL,
        ];
    }
}
