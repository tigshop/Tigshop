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
 * Data binary stream
 *
 * FCGI_DATA is a second stream record type used to send additional data to the application.
 */
class Data extends Record
{
    public function __construct(string $contentData)
    {
        $this->type = FastCGI::DATA;
        $this->setContentData($contentData);
    }
}
