<?php

declare(strict_types=1);

namespace Swoole\NameResolver;

/**
 * Instance of this class is only used as value of the second parameter of function \swoole_name_resolver_lookup().
 *
 * @since 5.0.0
 * @not-serializable Objects of this class cannot be serialized.
 * @see \swoole_name_resolver_lookup()
 */
class Context
{
    public function __construct(int $family = AF_INET, bool $withPort = false)
    {
    }
}
