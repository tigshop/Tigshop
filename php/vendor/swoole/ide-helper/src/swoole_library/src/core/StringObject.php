<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole;

class StringObject implements \Stringable
{
    /**
     * StringObject constructor.
     */
    public function __construct(protected string $string = '')
    {
    }

    public function __toString(): string
    {
        return $this->string;
    }

    public static function from(string $string = ''): static
    {
        return new static($string); // @phpstan-ignore new.static
    }

    public function length(): int
    {
        return strlen($this->string);
    }

    public function indexOf(string $needle, int $offset = 0): false|int
    {
        return strpos($this->string, $needle, $offset);
    }

    public function lastIndexOf(string $needle, int $offset = 0): false|int
    {
        return strrpos($this->string, $needle, $offset);
    }

    public function pos(string $needle, int $offset = 0): false|int
    {
        return strpos($this->string, $needle, $offset);
    }

    public function rpos(string $needle, int $offset = 0): false|int
    {
        return strrpos($this->string, $needle, $offset);
    }

    public function reverse(): static
    {
        return new static(strrev($this->string)); // @phpstan-ignore new.static
    }

    /**
     * @return false|int
     */
    public function ipos(string $needle)
    {
        return stripos($this->string, $needle);
    }

    public function lower(): static
    {
        return new static(strtolower($this->string)); // @phpstan-ignore new.static
    }

    public function upper(): static
    {
        return new static(strtoupper($this->string)); // @phpstan-ignore new.static
    }

    public function trim(string $characters = ''): static
    {
        if ($characters) {
            return new static(trim($this->string, $characters)); // @phpstan-ignore new.static
        }
        return new static(trim($this->string)); // @phpstan-ignore new.static
    }

    /**
     * @return static
     */
    public function ltrim(): self
    {
        return new static(ltrim($this->string)); // @phpstan-ignore new.static
    }

    /**
     * @return static
     */
    public function rtrim(): self
    {
        return new static(rtrim($this->string)); // @phpstan-ignore new.static
    }

    /**
     * @return static
     */
    public function substr(int $offset, ?int $length = null)
    {
        return new static(substr($this->string, $offset, $length)); // @phpstan-ignore new.static
    }

    public function repeat(int $times): static
    {
        return new static(str_repeat($this->string, $times)); // @phpstan-ignore new.static
    }

    public function append(mixed $str): static
    {
        return new static($this->string .= $str); // @phpstan-ignore new.static
    }

    /**
     * @param int|null $count
     */
    public function replace(string $search, string $replace, &$count = null): static
    {
        return new static(str_replace($search, $replace, $this->string, $count)); // @phpstan-ignore new.static
    }

    public function startsWith(string $needle): bool
    {
        return str_starts_with($this->string, $needle);
    }

    public function endsWith(string $needle): bool
    {
        return strrpos($this->string, $needle) === (strlen($this->string) - strlen($needle));
    }

    public function equals($str, bool $strict = false): bool
    {
        if ($str instanceof StringObject) {
            $str = strval($str);
        }
        if ($strict) {
            return $this->string === $str;
        }
        return $this->string == $str;
    }

    public function contains(string $subString): bool
    {
        return str_contains($this->string, $subString);
    }

    public function split(string $delimiter, int $limit = PHP_INT_MAX): ArrayObject
    {
        return static::detectArrayType(explode($delimiter, $this->string, $limit));
    }

    public function char(int $index): string
    {
        if ($index > strlen($this->string)) {
            return '';
        }
        return $this->string[$index];
    }

    /**
     * Get a new string object by splitting the string of current object into smaller chunks.
     *
     * @param int $length The chunk length.
     * @param string $separator The line ending sequence.
     * @see https://www.php.net/chunk_split
     */
    public function chunkSplit(int $length = 76, string $separator = "\r\n"): static
    {
        return new static(chunk_split($this->string, $length, $separator)); // @phpstan-ignore new.static
    }

    /**
     * Convert a string to an array object of class \Swoole\ArrayObject.
     *
     * @param int $length Maximum length of the chunk.
     * @see https://www.php.net/str_split
     */
    public function chunk(int $length = 1): ArrayObject
    {
        return static::detectArrayType(str_split($this->string, $length));
    }

    public function toString(): string
    {
        return $this->string;
    }

    protected static function detectArrayType(array $value): ArrayObject
    {
        return new ArrayObject($value);
    }
}
