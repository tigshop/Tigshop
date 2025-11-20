<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole\FastCGI\Record;

use Swoole\FastCGI;
use Swoole\FastCGI\Record;

/**
 * The Web server sends a FCGI_ABORT_REQUEST record to abort a request
 */
class AbortRequest extends Record
{
    public function __construct(int $requestId)
    {
        $this->type = FastCGI::ABORT_REQUEST;
        $this->setRequestId($requestId);
    }
}
