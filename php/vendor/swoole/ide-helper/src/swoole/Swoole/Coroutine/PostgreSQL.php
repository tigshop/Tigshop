<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

/**
 * This class is available when Swoole is installed with option "--enable-swoole-pgsql" included.
 *
 * @since 5.0.0
 * @not-serializable Objects of this class cannot be serialized.
 * @alias This class has an alias of "\Co\PostgreSQL" when directive "swoole.use_shortname" is not explicitly turned off.
 * @see \Co\PostgreSQL
 */
class PostgreSQL
{
    public string $error;

    public int $errCode = 0;

    public int $resultStatus = 0;

    public array $resultDiag;

    public array $notices;

    public function connect(string $conninfo, float $timeout = 2): bool
    {
    }

    public function query(string $query): PostgreSQLStatement|false
    {
    }

    public function prepare(string $query): PostgreSQLStatement|false
    {
    }

    public function metaData(string $table_name): array|false
    {
    }

    /**
     * Escape a string for query.
     *
     * This method works similar to PHP function \pg_escape_string().
     *
     * @param string $string A string containing text to be escaped.
     * @return string|false A string containing the escaped data. When error happens, it returns FALSE, has error code set in $this->errCode and has error message set in $this->error.
     * @see https://www.php.net/pg-escape-string PHP function pg_escape_string()
     */
    public function escape(string $string): string|false
    {
    }

    /**
     * Escape a literal for insertion into a text field.
     *
     * This method works similar to PHP function \pg_escape_literal().
     *
     * @param string $string A string containing text to be escaped.
     * @return string|false A string containing the escaped data. When error happens, it returns FALSE and has error message set in $this->error.
     * @see https://www.php.net/pg-escape-literal PHP function pg_escape_literal()
     */
    public function escapeLiteral(string $string): string|false
    {
    }

    /**
     * Escape an identifier for insertion into a text field.
     *
     * This method works similar to PHP function \pg_escape_identifier().
     *
     * @param string $string A string containing text to be escaped.
     * @return string|false A string containing the escaped data. When error happens, it returns FALSE and has error message set in $this->error.
     * @see https://www.php.net/pg-escape-identifier PHP function pg_escape_identifier()
     */
    public function escapeIdentifier(string $string): string|false
    {
    }

    /**
     * Create a large object.
     *
     * @return int|false Returns the OID of the new large object, or FALSE when error happens.
     * @since 5.0.1
     */
    public function createLOB(): int|false
    {
    }

    /**
     * Open a large object.
     *
     * @param int $oid The OID of the large object to be opened.
     * @param string $mode The mode to open the large object. It can be "r" for read-only, "w" for write-only, or "rw" for read-write.
     * @return resource|false Returns the large object resource, or FALSE when error happens.
     * @since 5.0.1
     */
    public function openLOB(int $oid, string $mode = 'r')
    {
    }

    /**
     * Delete a large object.
     *
     * @param int $oid The OID of the large object to be deleted.
     * @return bool Returns TRUE on success, or FALSE when error happens.
     * @since 5.0.1
     */
    public function unlinkLOB(int $oid): bool
    {
    }
}
