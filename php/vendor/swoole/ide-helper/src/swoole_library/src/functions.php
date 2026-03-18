<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

if (PHP_VERSION_ID < 70200) {
    throw new RuntimeException('require PHP version 7.2 or later');
}

if (SWOOLE_USE_SHORTNAME) {
    function _string(string $string = ''): Swoole\StringObject
    {
        return new Swoole\StringObject($string);
    }

    function _mbstring(string $string = ''): Swoole\MultibyteStringObject
    {
        return new Swoole\MultibyteStringObject($string);
    }

    function _array(array $array = []): Swoole\ArrayObject
    {
        return new Swoole\ArrayObject($array);
    }
}

class SwooleLibrary
{
    public static $options = [];
}

function swoole_library_set_options(array $options)
{
    SwooleLibrary::$options = $options;
}

function swoole_library_get_options()
{
    return SwooleLibrary::$options;
}

function swoole_library_set_option(string $key, $value)
{
    SwooleLibrary::$options[$key] = $value;
}

function swoole_library_get_option(string $key)
{
    return SwooleLibrary::$options[$key] ?? null;
}

function swoole_string(string $string = ''): Swoole\StringObject
{
    return new Swoole\StringObject($string);
}

function swoole_mbstring(string $string = ''): Swoole\MultibyteStringObject
{
    return new Swoole\MultibyteStringObject($string);
}

function swoole_array(array $array = []): Swoole\ArrayObject
{
    return new Swoole\ArrayObject($array);
}

function swoole_table(int $size, string $fields): Swoole\Table
{
    $_fields = swoole_string($fields)->trim()->split(',');

    $table = new Swoole\Table($size, 0.25);

    foreach ($_fields as $f) {
        $_f = swoole_string($f)->trim()->split(':');
        $name = $_f->get(0)->trim()->toString();
        $type = $_f->get(1)->trim();

        switch ($type) {
        case 'i':
        case 'int':
            $table->column($name, Swoole\Table::TYPE_INT);
            break;
        case 'f':
        case 'float':
            $table->column($name, Swoole\Table::TYPE_FLOAT);
            break;
        case 's':
        case 'string':
            if ($_f->count() < 3) {
                throw new RuntimeException('need to give string length');
            }
            $length = intval($_f->get(2)->trim()->toString());
            if ($length <= 0) {
                throw new RuntimeException("invalid string length[{$length}]");
            }
            $table->column($name, Swoole\Table::TYPE_STRING, $length);
            break;
        default:
            throw new RuntimeException("unknown field type[{$type}]");
            break;
        }
    }

    if (!$table->create()) {
        throw new RuntimeException('failed to create table');
    }

    return $table;
}

function swoole_array_list(...$arrray): Swoole\ArrayObject
{
    return new Swoole\ArrayObject($arrray);
}

function swoole_array_default_value(array $array, $key, $default_value = null)
{
    return array_key_exists($key, $array) ? $array[$key] : $default_value;
}

if (!function_exists('array_key_last')) {
    function array_key_last(array $array)
    {
        if (!empty($array)) {
            return key(array_slice($array, -1, 1, true));
        }
        return null;
    }
}

if (!function_exists('array_key_first')) {
    function array_key_first(array $array)
    {
        foreach ($array as $key => $unused) {
            return $key;
        }
        return null;
    }
}
