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
 * Stderr binary stream
 *
 * FCGI_STDERR is a stream record for sending arbitrary data from the application to the Web server
 */
class Stderr extends Record
{
    public function __construct(string $contentData)
    {
        $this->type = FastCGI::STDERR;
        $this->setContentData($contentData);
    }
}
