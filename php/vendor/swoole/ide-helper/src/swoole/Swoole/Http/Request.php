<?php

declare(strict_types=1);

namespace Swoole\Http;

/**
 * The HTTP Request class.
 *
 * @not-serializable Objects of this class cannot be serialized.
 */
class Request
{
    public int $fd = 0;

    public int $streamId = 0;

    public $header;

    public $server;

    public $cookie;

    public $get;

    public $files;

    public $post;

    public $tmpfiles;

    /**
     * Get the request content, kind of like function call fopen('php://input').
     *
     * @return string|false Return the request content back; return FALSE when error happens.
     * @alias This method has an alias of \Swoole\Http\Request::rawContent().
     * @see \Swoole\Http\Request::rawContent()
     * @since 4.5.0
     */
    public function getContent(): string|false
    {
    }

    /**
     * Get the request content, kind of like function call fopen('php://input').
     *
     * @return string|false Return the request content back; return FALSE when error happens.
     * @alias Alias of method \Swoole\Http\Request::getContent().
     * @see \Swoole\Http\Request::getContent()
     */
    public function rawContent(): string|false
    {
    }

    public function getData(): string|false
    {
    }

    public static function create(array $options = []): Request
    {
    }

    /**
     * @since 4.6.0
     */
    public function parse(string $data): int|false
    {
    }

    /**
     * @since 4.6.0
     */
    public function isCompleted(): bool
    {
    }

    public function getMethod(): string|false
    {
    }
}
