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

if (SWOOLE_USE_SHORTNAME) { // @phpstan-ignore if.alwaysTrue
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
    /**
     * @var array<string, mixed>
     */
    public static array $options = [];
}

/**
 * @param array<string, mixed> $options
 */
function swoole_library_set_options(array $options): void
{
    SwooleLibrary::$options = $options;
}

function swoole_library_get_options(): array
{
    return SwooleLibrary::$options;
}

function swoole_library_set_option(string $key, mixed $value): void
{
    SwooleLibrary::$options[$key] = $value;
}

function swoole_library_get_option(string $key): mixed
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
        $_f   = swoole_string($f)->trim()->split(':');
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
                $length = (int) $_f->get(2)->trim()->toString();
                if ($length <= 0) {
                    throw new RuntimeException("invalid string length[{$length}]");
                }
                $table->column($name, Swoole\Table::TYPE_STRING, $length);
                break;
            default:
                throw new RuntimeException("unknown field type[{$type}]");
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

function swoole_is_in_container()
{
    $mountinfo = file_get_contents('/proc/self/mountinfo');
    return strpos($mountinfo, 'kubepods') > 0 || strpos($mountinfo, 'docker') > 0;
}

function swoole_container_cpu_num()
{
    $swoole_cpu_num = intval(getenv('SWOOLE_CPU_NUM'));
    if ($swoole_cpu_num > 0) {
        return $swoole_cpu_num;
    }
    if (!swoole_is_in_container()) {
        return swoole_cpu_num();
    }
    // cgroup v2
    $cpu_max = '/sys/fs/cgroup/cpu.max';
    if (file_exists($cpu_max)) {
        $cpu_max  = file_get_contents($cpu_max);
        $fields   = explode($cpu_max, ' ');
        $quota_us = $fields[0];
        if ($quota_us == 'max') {
            return swoole_cpu_num();
        }
        $period_us = $fields[1] ?? 100000;
    } else {
        $quota_us  = file_get_contents('/sys/fs/cgroup/cpu,cpuacct/cpu.cfs_quota_us');
        $period_us = file_get_contents('/sys/fs/cgroup/cpu,cpuacct/cpu.cfs_period_us');
    }
    $cpu_num = floatval($quota_us) / floatval($period_us);
    if ($cpu_num < 1) {
        return swoole_cpu_num();
    }
    return intval(floor($cpu_num));
}
