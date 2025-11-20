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

use PDO;
use Swoole\ConnectionPool;

/**
 * @method void put(PDO|PDOProxy $connection)
 */
class PDOPool extends ConnectionPool
{
    public function __construct(protected PDOConfig $config, int $size = self::DEFAULT_SIZE)
    {
        parent::__construct(function () {
            $driver = $this->config->getDriver();
            if ($driver === 'sqlite') {
                return new \PDO($this->createDSN('sqlite'));
            }

            return new \PDO($this->createDSN($driver), $this->config->getUsername(), $this->config->getPassword(), $this->config->getOptions());
        }, $size, PDOProxy::class);
    }

    /**
     * Get a PDO connection from the pool. The PDO connection (a PDO object) is wrapped in a PDOProxy object returned.
     *
     * @param float $timeout > 0 means waiting for the specified number of seconds. other means no waiting.
     * @return PDOProxy|false Returns a PDOProxy object from the pool, or false if the pool is full and the timeout is reached.
     *                        {@inheritDoc}
     */
    public function get(float $timeout = -1)
    {
        /* @var \Swoole\Database\PDOProxy|false $pdo */
        $pdo = parent::get($timeout);
        if ($pdo === false) {
            return false;
        }

        $pdo->reset();

        return $pdo;
    }

    /**
     * @purpose create DSN
     * @throws \Exception
     */
    private function createDSN(string $driver): string
    {
        switch ($driver) {
            case 'mysql':
                if ($this->config->hasUnixSocket()) {
                    $dsn = "mysql:unix_socket={$this->config->getUnixSocket()};dbname={$this->config->getDbname()};charset={$this->config->getCharset()}";
                } else {
                    $dsn = "mysql:host={$this->config->getHost()};port={$this->config->getPort()};dbname={$this->config->getDbname()};charset={$this->config->getCharset()}";
                }
                break;
            case 'pgsql':
                $dsn = 'pgsql:host=' . ($this->config->hasUnixSocket() ? $this->config->getUnixSocket() : $this->config->getHost()) . ";port={$this->config->getPort()};dbname={$this->config->getDbname()}";
                break;
            case 'oci':
                $dsn = 'oci:dbname=' . ($this->config->hasUnixSocket() ? $this->config->getUnixSocket() : $this->config->getHost()) . ':' . $this->config->getPort() . '/' . $this->config->getDbname() . ';charset=' . $this->config->getCharset();
                break;
            case 'sqlite':
                // There are three types of SQLite databases: databases on disk, databases in memory, and temporary
                // databases (which are deleted when the connections are closed). It doesn't make sense to use
                // connection pool for the latter two types of databases, because each connection connects to a
                //different in-memory or temporary SQLite database.
                if ($this->config->getDbname() === '') {
                    throw new \Exception('Connection pool in Swoole does not support temporary SQLite databases.');
                }
                if ($this->config->getDbname() === ':memory:') {
                    throw new \Exception('Connection pool in Swoole does not support creating SQLite databases in memory.');
                }
                $dsn = 'sqlite:' . $this->config->getDbname();
                break;
            default:
                throw new \Exception('Unsupported Database Driver:' . $driver);
        }
        return $dsn;
    }
}
