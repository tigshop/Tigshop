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

use Swoole\FastCGI\Record\EndRequest;
use Swoole\FastCGI\Record\Stderr;
use Swoole\FastCGI\Record\Stdout;
use Swoole\Http\Status;

class HttpResponse extends Response
{
    /** @var int */
    protected $statusCode;

    /** @var string */
    protected $reasonPhrase;

    /**
     * @var array<string, string>
     */
    protected array $headers = [];

    /**
     * @var array<string, string>
     */
    protected array $headersMap = [];

    /**
     * @var array<string>
     */
    protected array $setCookieHeaderLines = [];

    /**
     * @param array<Stdout|Stderr|EndRequest> $records
     */
    public function __construct(array $records = [])
    {
        parent::__construct($records);
        $body = $this->getBody();
        if (strlen($body) === 0) {
            return;
        }
        $array = explode("\r\n\r\n", $body, 2); // An array that contains the HTTP headers and the body.
        if (count($array) != 2) {
            $this->withStatusCode(Status::BAD_GATEWAY)->withReasonPhrase('Invalid FastCGI Response')->withError($body);
            return;
        }
        $headers = explode("\r\n", $array[0]);
        $body    = $array[1];
        foreach ($headers as $header) {
            $array = explode(':', $header, 2); // An array that contains the name and the value of an HTTP header.
            if (count($array) != 2) {
                continue; // Invalid HTTP header? Ignore it!
            }
            $name  = trim($array[0]);
            $value = trim($array[1]);
            if (strcasecmp($name, 'Status') === 0) {
                $array        = explode(' ', $value, 2); // An array that contains the status code (and the reason phrase).
                $statusCode   = $array[0];
                $reasonPhrase = $array[1] ?? null;
            } elseif (strcasecmp($name, 'Set-Cookie') === 0) {
                $this->withSetCookieHeaderLine($value);
            } else {
                $this->withHeader($name, $value);
            }
        }
        $statusCode   = (int) ($statusCode ?? Status::OK);
        $reasonPhrase = $reasonPhrase ?? Status::getReasonPhrase($statusCode);
        $this->withStatusCode($statusCode)->withReasonPhrase($reasonPhrase);
        $this->withBody($body);
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function withStatusCode(int $statusCode): self
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function getReasonPhrase(): string
    {
        return $this->reasonPhrase;
    }

    public function withReasonPhrase(string $reasonPhrase): self
    {
        $this->reasonPhrase = $reasonPhrase;
        return $this;
    }

    public function getHeader(string $name): ?string
    {
        $name = $this->headersMap[strtolower($name)] ?? null;
        return $name ? $this->headers[$name] : null;
    }

    /**
     * @return array<string, string>
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string $value): self
    {
        $this->headers[$name]                = $value;
        $this->headersMap[strtolower($name)] = $name;
        return $this;
    }

    /**
     * @param array<string, string> $headers
     */
    public function withHeaders(array $headers): self
    {
        foreach ($headers as $name => $value) {
            $this->withHeader($name, $value);
        }
        return $this;
    }

    /**
     * @return array<string>
     */
    public function getSetCookieHeaderLines(): array
    {
        return $this->setCookieHeaderLines;
    }

    public function withSetCookieHeaderLine(string $value): self
    {
        $this->setCookieHeaderLines[] = $value;
        return $this;
    }
}
