<?php

declare(strict_types=1);

namespace Swoole;

class Runtime
{
    /**
     * To enable/disable runtime hooks in coroutines.
     *
     * For backward-compatible reason, there are four different ways to call this method:
     *   #1. Swoole\Runtime::enableCoroutine();             // Enable runtime hooks represented by constant SWOOLE_HOOK_ALL.
     *   #2. Swoole\Runtime::enableCoroutine($flags);       // Enable specified runtime hooks.
     *   #3. Swoole\Runtime::enableCoroutine(true, $flags); // Enable specified runtime hooks.
     *   #4. Swoole\Runtime::enableCoroutine(false);        // Disable runtime hooks.
     * Following statements are of the same (when used to disable runtime hooks):
     *   Swoole\Runtime::enableCoroutine(0);       // #2
     *   Swoole\Runtime::enableCoroutine(true, 0); // #3
     *   Swoole\Runtime::enableCoroutine(false);   // #4
     *
     * @return bool TRUE on success, or FALSE on failure.
     * @pseudocode-included This is a built-in method in Swoole. The PHP code included inside this method is for explanation purpose only.
     */
    public static function enableCoroutine(bool|int $enable = SWOOLE_HOOK_ALL, int $flags = SWOOLE_HOOK_ALL): bool
    {
        if (PHP_SAPI !== 'cli') {
            // An E_ERROR level error will be thrown out here.
            return false;
        }

        if (is_int($enable)) {
            $flags = max(0, $enable);
        } elseif (is_bool($enable)) {
            if ($enable === false) {
                // Disable runtime hooks.
                $flags = 0;
            }
        } else {
            throw new \ErrorException('... expects parameter 1 to be boolean or integer, ...');
        }

        return self::setHookFlags($flags);
    }

    /**
     * Get current runtime hook flags.
     */
    public static function getHookFlags(): int
    {
    }

    /**
     * Set runtime hook flags. This overrides any flags set previously.
     *
     * Here are some examples of setting runtime hook flags:
     * - setHookFlags(SWOOLE_HOOK_TCP): Enable TCP hook only.
     * - setHookFlags(SWOOLE_HOOK_TCP | SWOOLE_HOOK_UDP | SWOOLE_HOOK_SOCKETS): Enable TCP, UDP and socket hooks.
     * - setHookFlags(SWOOLE_HOOK_ALL): Enable all runtime hooks.
     * - setHookFlags(SWOOLE_HOOK_ALL ^ SWOOLE_HOOK_FILE ^ SWOOLE_HOOK_STDIO): Enable all runtime hooks except file and stdio hooks.
     * - setHookFlags(0): Disable runtime hooks.
     *
     * @return bool true on success or false on failure
     * @since 4.5.0
     */
    public static function setHookFlags(int $flags): bool
    {
    }
}
