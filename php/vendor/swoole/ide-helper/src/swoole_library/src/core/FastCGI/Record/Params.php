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
 * Params request record
 */
class Params extends Record
{
    /**
     * List of params
     *
     * @var array
     */
    protected $values = [];

    /**
     * Constructs a param request
     */
    public function __construct(array $values = [])
    {
        $this->type = FastCGI::PARAMS;
        $this->values = $values;
        $this->setContentData($this->packPayload());
    }

    /**
     * Returns an associative list of parameters
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * {@inheritdoc}
     * @param static $self
     */
    protected static function unpackPayload($self, string $data): void
    {
        $currentOffset = 0;
        do {
            [$nameLengthHigh] = array_values(unpack('CnameLengthHigh', $data));
            $isLongName = ($nameLengthHigh >> 7 == 1);
            $valueOffset = $isLongName ? 4 : 1;

            [$valueLengthHigh] = array_values(unpack('CvalueLengthHigh', substr($data, $valueOffset)));
            $isLongValue = ($valueLengthHigh >> 7 == 1);
            $dataOffset = $valueOffset + ($isLongValue ? 4 : 1);

            $formatParts = [
                $isLongName ? 'NnameLength' : 'CnameLength',
                $isLongValue ? 'NvalueLength' : 'CvalueLength',
            ];
            $format = join('/', $formatParts);
            [$nameLength, $valueLength] = array_values(unpack($format, $data));

            // Clear top bit for long record
            $nameLength &= ($isLongName ? 0x7FFFFFFF : 0x7F);
            $valueLength &= ($isLongValue ? 0x7FFFFFFF : 0x7F);

            [$nameData, $valueData] = array_values(
                unpack(
                    "a{$nameLength}nameData/a{$valueLength}valueData",
                    substr($data, $dataOffset)
                )
            );

            $self->values[$nameData] = $valueData;

            $keyValueLength = $dataOffset + $nameLength + $valueLength;
            $data = substr($data, $keyValueLength);
            $currentOffset += $keyValueLength;
        } while ($currentOffset < $self->getContentLength());
    }

    /** {@inheritdoc} */
    protected function packPayload(): string
    {
        $payload = '';
        foreach ($this->values as $nameData => $valueData) {
            if ($valueData === null) {
                continue;
            }
            $nameLength = strlen($nameData);
            $valueLength = strlen((string) $valueData);
            $isLongName = $nameLength > 127;
            $isLongValue = $valueLength > 127;
            $formatParts = [
                $isLongName ? 'N' : 'C',
                $isLongValue ? 'N' : 'C',
                "a{$nameLength}",
                "a{$valueLength}",
            ];
            $format = join('', $formatParts);

            $payload .= pack(
                $format,
                $isLongName ? ($nameLength | 0x80000000) : $nameLength,
                $isLongValue ? ($valueLength | 0x80000000) : $valueLength,
                $nameData,
                $valueData
            );
        }

        return $payload;
    }
}
