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

use Swoole\FastCGI;

/**
 * FastCGI record.
 */
class Record implements \Stringable
{
    /**
     * Identifies the FastCGI protocol version.
     */
    protected int $version = FastCGI::VERSION_1;

    /**
     * Identifies the FastCGI record type, i.e. the general function that the record performs.
     */
    protected int $type = FastCGI::UNKNOWN_TYPE;

    /**
     * Identifies the FastCGI request to which the record belongs.
     */
    protected int $requestId = FastCGI::DEFAULT_REQUEST_ID;

    /**
     * Reserved byte for future proposes
     */
    protected int $reserved = 0;

    /**
     * The number of bytes in the contentData component of the record.
     */
    private int $contentLength = 0;

    /**
     * The number of bytes in the paddingData component of the record.
     */
    private int $paddingLength = 0;

    /**
     * Binary data, between 0 and 65535 bytes of data, interpreted according to the record type.
     */
    private string $contentData = '';

    /**
     * Padding data, between 0 and 255 bytes of data, which are ignored.
     */
    private string $paddingData = '';

    /**
     * Returns the binary message representation of record
     */
    final public function __toString(): string
    {
        $headerPacket = pack(
            'CCnnCC',
            $this->version,
            $this->type,
            $this->requestId,
            $this->contentLength,
            $this->paddingLength,
            $this->reserved
        );

        $payloadPacket = $this->packPayload();
        $paddingPacket = pack("a{$this->paddingLength}", $this->paddingData);

        return $headerPacket . $payloadPacket . $paddingPacket;
    }

    /**
     * Unpacks the message from the binary data buffer
     */
    final public static function unpack(string $binaryData): static
    {
        /** @var static $self */
        $self = (new \ReflectionClass(static::class))->newInstanceWithoutConstructor();

        /** @phpstan-var false|array{version: int, type: int, requestId: int, contentLength: int, paddingLength: int, reserved: int} */
        $packet = unpack(FastCGI::HEADER_FORMAT, $binaryData);
        if ($packet === false) {
            throw new \RuntimeException('Can not unpack data from the binary buffer');
        }
        [
            $self->version,
            $self->type,
            $self->requestId,
            $self->contentLength,
            $self->paddingLength,
            $self->reserved
        ] = array_values($packet);

        $payload = substr($binaryData, FastCGI::HEADER_LEN);
        self::unpackPayload($self, $payload);
        if (static::class !== self::class && $self->contentLength > 0) {
            static::unpackPayload($self, $payload);
        }

        return $self;
    }

    /**
     * Sets the content data and adjusts the length fields
     *
     * @return static
     */
    public function setContentData(string $data): self
    {
        $this->contentLength = strlen($data);
        if ($this->contentLength > FastCGI::MAX_CONTENT_LENGTH) {
            $this->contentLength = FastCGI::MAX_CONTENT_LENGTH;
            $this->contentData   = substr($data, 0, FastCGI::MAX_CONTENT_LENGTH);
        } else {
            $this->contentData = $data;
        }
        $extraLength         = $this->contentLength % 8;
        $this->paddingLength = $extraLength ? (8 - $extraLength) : 0;
        return $this;
    }

    /**
     * Returns the context data from the record
     */
    public function getContentData(): string
    {
        return $this->contentData;
    }

    /**
     * Returns the version of record
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * Returns record type
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Returns request ID
     */
    public function getRequestId(): int
    {
        return $this->requestId;
    }

    /**
     * Sets request ID
     *
     * There should be only one unique ID for all active requests,
     * use random number or preferably resetting auto-increment.
     *
     * @return static
     */
    public function setRequestId(int $requestId): self
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * Returns the size of content length
     */
    final public function getContentLength(): int
    {
        return $this->contentLength;
    }

    /**
     * Returns the size of padding length
     */
    final public function getPaddingLength(): int
    {
        return $this->paddingLength;
    }

    /**
     * Method to unpack the payload for the record.
     *
     * NB: Default implementation will be always called
     */
    protected static function unpackPayload(self $self, string $binaryData): void
    {
        /** @phpstan-var false|array{contentData: string, paddingData: string} */
        $payload = unpack("a{$self->contentLength}contentData/a{$self->paddingLength}paddingData", $binaryData);
        if ($payload === false) {
            throw new \RuntimeException('Can not unpack data from the binary buffer');
        }
        [
            $self->contentData,
            $self->paddingData
        ] = array_values($payload);
    }

    /**
     * Implementation of packing the payload
     */
    protected function packPayload(): string
    {
        return pack("a{$this->contentLength}", $this->contentData);
    }
}
