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
     * @var string[]
     * @phpstan-var array<string, string>
     */
    protected array $values = [];

    /**
     * Constructs a param request
     *
     * @phpstan-param array<string, string> $values
     */
    public function __construct(array $values)
    {
        $this->type   = FastCGI::PARAMS;
        $this->values = $values;
        $this->setContentData($this->packPayload());
    }

    /**
     * Returns an associative list of parameters
     *
     * @phpstan-return array<string, string>
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * {@inheritdoc}
     * @param static $self
     */
    protected static function unpackPayload($self, string $binaryData): void
    {
        assert($self instanceof self);
        $currentOffset = 0;
        do {
            /** @phpstan-var false|array{nameLengthHigh: int} */
            $payload = unpack('CnameLengthHigh', $binaryData);
            if ($payload === false) {
                throw new \RuntimeException('Can not unpack data from the binary buffer');
            }
            [$nameLengthHigh] = array_values($payload);
            $isLongName       = ($nameLengthHigh >> 7 == 1);
            $valueOffset      = $isLongName ? 4 : 1;

            /** @phpstan-var false|array{valueLengthHigh: int} */
            $payload = unpack('CvalueLengthHigh', substr($binaryData, $valueOffset));
            if ($payload === false) {
                throw new \RuntimeException('Can not unpack data from the binary buffer');
            }
            [$valueLengthHigh] = array_values($payload);
            $isLongValue       = ($valueLengthHigh >> 7 == 1);
            $dataOffset        = $valueOffset + ($isLongValue ? 4 : 1);

            $formatParts = [
                $isLongName ? 'NnameLength' : 'CnameLength',
                $isLongValue ? 'NvalueLength' : 'CvalueLength',
            ];
            $format      = join('/', $formatParts);

            /** @phpstan-var false|array{nameLength: int, valueLength: int} */
            $payload = unpack($format, $binaryData);
            if ($payload === false) {
                throw new \RuntimeException('Can not unpack data from the binary buffer');
            }
            [$nameLength, $valueLength] = array_values($payload);

            // Clear top bit for long record
            $nameLength &= ($isLongName ? 0x7FFFFFFF : 0x7F);
            $valueLength &= ($isLongValue ? 0x7FFFFFFF : 0x7F);

            /** @phpstan-var false|array{nameData: string, valueData: string} */
            $payload = unpack(
                "a{$nameLength}nameData/a{$valueLength}valueData",
                substr($binaryData, $dataOffset)
            );
            if ($payload === false) {
                throw new \RuntimeException('Can not unpack data from the binary buffer');
            }
            [$nameData, $valueData] = array_values($payload);

            $self->values[$nameData] = $valueData;

            $keyValueLength = $dataOffset + $nameLength + $valueLength;
            $binaryData     = substr($binaryData, $keyValueLength);
            $currentOffset += $keyValueLength;
        } while ($currentOffset < $self->getContentLength());
    }

    /**
     * {@inheritdoc}
     */
    protected function packPayload(): string
    {
        $payload = '';
        foreach ($this->values as $nameData => $valueData) {
            if ($valueData === null) { // @phpstan-ignore identical.alwaysFalse
                continue;
            }
            $nameLength  = strlen($nameData);
            $valueLength = strlen((string) $valueData);
            $isLongName  = $nameLength > 127;
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
