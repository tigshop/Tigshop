<?php

declare(strict_types=1);

namespace Swoole\Server;

/**
 * @not-serializable Objects of this class cannot be serialized.
 */
final class Task
{
    public $data;

    public float $dispatch_time = 0;

    public int $id = -1;

    public int $worker_id = -1;

    public int $flags = 0;

    public function finish(mixed $data): bool
    {
    }

    /**
     * Pack task data.
     *
     * @param mixed $data Task data to be packed.
     * @return string|false The packed task data. Returns false if failed.
     */
    public static function pack(mixed $data): string|false
    {
    }

    /**
     * Unpack task data.
     *
     * @param string $data The packed task data.
     * @return mixed The unpacked data. Returns false if failed.
     * @since 5.0.1
     */
    public static function unpack(string $data): mixed
    {
    }
}
