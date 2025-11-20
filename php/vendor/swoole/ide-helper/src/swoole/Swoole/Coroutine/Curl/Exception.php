<?php

declare(strict_types=1);

namespace Swoole\Coroutine\Curl;

/**
 * The exception class for runtime hook flag SWOOLE_HOOK_NATIVE_CURL.
 *
 * If runtime hook flag SWOOLE_HOOK_NATIVE_CURL is enabled and some error happens when calling PHP's curl functions, an
 * exception of this class could be thrown out.
 *
 * This class is defined only when option "--enable-swoole-curl" is included during installation. As of Swoole 5.0.1,
 * the class is not yet in use anywhere.
 *
 * @alias This class has an alias of "\Co\Curl\Exception" when directive "swoole.use_shortname" is not explicitly turned off.
 * @see \Co\Curl\Exception
 * @since 4.6.0
 */
class Exception extends \Swoole\Exception
{
}
