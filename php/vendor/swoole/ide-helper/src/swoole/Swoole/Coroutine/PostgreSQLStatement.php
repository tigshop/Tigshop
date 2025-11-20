<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

/**
 * This class is available when Swoole is installed with option "--enable-swoole-pgsql" included.
 *
 * @since 5.0.0
 * @not-serializable Objects of this class cannot be serialized.
 */
class PostgreSQLStatement
{
    public string $error;

    public int $errCode = 0;

    public int $resultStatus = 0;

    public array $resultDiag;

    /**
     * Not yet in use anywhere as of Swoole 5.0.1.
     */
    public array $notices;

    public function execute(array $params = []): bool
    {
    }

    public function fetchAll(int $result_type = SW_PGSQL_ASSOC): array|false
    {
    }

    /**
     * Returns the number of rows affected by the last SQL statement.
     *
     * @return int|false Returns the number of rows, or FALSE when error happens.
     */
    public function affectedRows(): int|false
    {
    }

    /**
     * Returns the number of rows (tuples) in the query result.
     *
     * @return int|false Returns the number of rows (tuples) in the query result, or FALSE when error happens.
     */
    public function numRows(): int|false
    {
    }

    /**
     * Returns the number of columns (fields) in each row of the query result.
     *
     * @return int|false Returns the number of columns (fields) in each row of the query result, or FALSE when error happens.
     */
    public function fieldCount(): int|false
    {
    }

    public function fetchObject(?int $row = 0, ?string $class_name = null, array $ctor_params = []): object|false
    {
    }

    public function fetchAssoc(?int $row = 0, int $result_type = SW_PGSQL_ASSOC): array|false
    {
    }

    public function fetchArray(?int $row = 0, int $result_type = SW_PGSQL_BOTH): array|false
    {
    }

    public function fetchRow(?int $row = 0, int $result_type = SW_PGSQL_NUM): array|false
    {
    }
}
