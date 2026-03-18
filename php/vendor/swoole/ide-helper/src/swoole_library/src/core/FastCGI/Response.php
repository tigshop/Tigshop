<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole\FastCGI;

use InvalidArgumentException;
use Swoole\FastCGI\Record\EndRequest;
use Swoole\FastCGI\Record\Stderr;
use Swoole\FastCGI\Record\Stdout;

class Response extends Message
{
    public function __construct(array $records = [])
    {
        if (!static::verify($records)) {
            throw new InvalidArgumentException('Bad records');
        }
        $body = '';
        $error = '';
        foreach ($records as $record) {
            if ($record instanceof Stdout) {
                if ($record->getContentLength() > 0) {
                    $body .= $record->getContentData();
                }
            } elseif ($record instanceof Stderr) {
                if ($record->getContentLength() > 0) {
                    $error .= $record->getContentData();
                }
            }
        }
        $this->withBody($body)->withError($error);
    }

    public static function verify(array $records): bool
    {
        return !empty($records) && $records[count($records) - 1] instanceof EndRequest;
    }
}
