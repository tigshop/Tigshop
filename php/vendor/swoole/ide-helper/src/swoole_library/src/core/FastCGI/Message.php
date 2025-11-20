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
    protected array $params = [];

    protected string $body = '';

    protected string $error = '';

    public function getParam(string $name): ?string
    {
        return $this->params[$name] ?? null;
    }

    public function withParam(string $name, string $value): static
    {
        $this->params[$name] = $value;
        return $this;
    }

    public function withoutParam(string $name): static
    {
        unset($this->params[$name]);
        return $this;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function withParams(array $params): static
    {
        $this->params = $params;
        return $this;
    }

    public function withAddedParams(array $params): static
    {
        $this->params = $params + $this->params;
        return $this;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function withBody(string|\Stringable $body): self
    {
        $this->body = (string) $body;
        return $this;
    }

    public function getError(): string
    {
        return $this->error;
    }

    public function withError(string $error): static
    {
        $this->error = $error;
        return $this;
    }
}
