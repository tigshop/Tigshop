<?php

declare(strict_types=1);

namespace Swoole\Http2;

/**
 * @not-serializable Objects of this class cannot be serialized.
 */
class Response
{
    public int $streamId = 0;

    public int $errCode = 0;

    public int $statusCode = 0;

    public bool $pipeline = false;

    public array $headers;

    public array $set_cookie_headers;

    public array $cookies;

    public string $data;
}
