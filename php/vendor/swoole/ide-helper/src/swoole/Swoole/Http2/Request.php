<?php

declare(strict_types=1);

namespace Swoole\Http2;

/**
 * @not-serializable Objects of this class cannot be serialized.
 */
class Request
{
    public string $path = '/';

    public string $method = 'GET';

    public array $headers;

    public array $cookies;

    public string $data = '';

    public bool $pipeline = false;

    /**
     * @since 5.1.0
     */
    public $usePipelineRead = false;
}
