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
 * Record for unknown queries
 *
 * The set of management record types is likely to grow in future versions of this protocol.
 * To provide for this evolution, the protocol includes the FCGI_UNKNOWN_TYPE management record.
 * When an application receives a management record whose type T it does not understand, the application responds
 * with {FCGI_UNKNOWN_TYPE, 0, {T}}.
 */
class UnknownType extends Record
{
    /**
     * Type of the unrecognized management record.
     *
     * @var int
     */
    protected $type1;

    /**
     * Reserved data, 7 bytes maximum
     *
     * @var string
     */
    protected $reserved1;

    public function __construct(int $type = 0, string $reserved = '')
    {
        $this->type = FastCGI::UNKNOWN_TYPE;
        $this->type1 = $type;
        $this->reserved1 = $reserved;
        $this->setContentData($this->packPayload());
    }

    /**
     * Returns the unrecognized type
     */
    public function getUnrecognizedType(): int
    {
        return $this->type1;
    }

    /**
     * {@inheritdoc}
     * @param static $self
     */
    public static function unpackPayload($self, string $data): void
    {
        [$self->type1, $self->reserved1] = array_values(unpack('Ctype/a7reserved', $data));
    }

    /** {@inheritdoc} */
    protected function packPayload(): string
    {
        return pack(
            'Ca7',
            $this->type1,
            $this->reserved1
        );
    }
}
