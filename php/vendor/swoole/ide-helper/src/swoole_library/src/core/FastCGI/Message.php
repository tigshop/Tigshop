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

class Message
{
    /** @var array */
    protected $params = [];

    /** @var string */
    protected $body = '';

    /** @var string */
    protected $error = '';

    public function getParam(string $name): ?string
    {
        return $this->params[$name] ?? null;
    }

    public function withParam(string $name, string $value): self
    {
        $this->params[$name] = $value;
        return $this;
    }

    public function withoutParam(string $name): self
    {
        unset($this->params[$name]);
        return $this;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function withParams(array $params): self
    {
        $this->params = $params;
        return $this;
    }

    public function withAddedParams(array $params): self
    {
        $this->params = $params + $this->params;
        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function withBody($body): self
    {
        $this->body = (string) $body;
        return $this;
    }

    public function getError(): string
    {
        return $this->error;
    }

    public function withError(string $error): self
    {
        $this->error = $error;
        return $this;
    }
}
