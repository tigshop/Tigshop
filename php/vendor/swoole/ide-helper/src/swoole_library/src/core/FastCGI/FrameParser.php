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

use DomainException;
use RuntimeException;
use Swoole\FastCGI;

/**
 * Utility class to simplify parsing of FastCGI protocol data.
 */
class FrameParser
{
    /**
     * Mapping of constants to the classes
     *
     * @var array
     */
    protected static $classMapping = [
        FastCGI::BEGIN_REQUEST => FastCGI\Record\BeginRequest::class,
        FastCGI::ABORT_REQUEST => FastCGI\Record\AbortRequest::class,
        FastCGI::END_REQUEST => FastCGI\Record\EndRequest::class,
        FastCGI::PARAMS => FastCGI\Record\Params::class,
        FastCGI::STDIN => FastCGI\Record\Stdin::class,
        FastCGI::STDOUT => FastCGI\Record\Stdout::class,
        FastCGI::STDERR => FastCGI\Record\Stderr::class,
        FastCGI::DATA => FastCGI\Record\Data::class,
        FastCGI::GET_VALUES => FastCGI\Record\GetValues::class,
        FastCGI::GET_VALUES_RESULT => FastCGI\Record\GetValuesResult::class,
        FastCGI::UNKNOWN_TYPE => FastCGI\Record\UnknownType::class,
    ];

    /**
     * Checks if the buffer contains a valid frame to parse
     *
     * @param string $buffer Binary buffer
     */
    public static function hasFrame(string $buffer): bool
    {
        $bufferLength = strlen($buffer);
        if ($bufferLength < FastCGI::HEADER_LEN) {
            return false;
        }

        $fastInfo = unpack(FastCGI::HEADER_FORMAT, $buffer);
        if ($bufferLength < FastCGI::HEADER_LEN + $fastInfo['contentLength'] + $fastInfo['paddingLength']) {
            return false;
        }

        return true;
    }

    /**
     * Parses a frame from the binary buffer
     *
     * @param string $buffer Binary buffer
     *
     * @return Record One of the corresponding FastCGI record
     */
    public static function parseFrame(string &$buffer): Record
    {
        $bufferLength = strlen($buffer);
        if ($bufferLength < FastCGI::HEADER_LEN) {
            throw new RuntimeException('Not enough data in the buffer to parse');
        }
        $recordHeader = unpack(FastCGI::HEADER_FORMAT, $buffer);
        $recordType = $recordHeader['type'];
        if (!isset(self::$classMapping[$recordType])) {
            throw new DomainException("Invalid FastCGI record type {$recordType} received");
        }

        /** @var Record $className */
        $className = self::$classMapping[$recordType];
        $record = $className::unpack($buffer);

        $offset = FastCGI::HEADER_LEN + $record->getContentLength() + $record->getPaddingLength();
        $buffer = substr($buffer, $offset);

        return $record;
    }
}
