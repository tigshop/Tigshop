<?php

declare(strict_types=1);

namespace Swoole\Coroutine;

/**
 * @not-serializable Objects of this class cannot be serialized.
 * @alias This class has two aliases: \chan and \Co\Channel (when directive "swoole.use_shortname" is not explicitly turned off).
 * @see \chan
 * @see \Co\Channel
 */
class Channel
{
    /**
     * Size of the channel. This indicates the maximum number of elements that can be stored in the channel. It has to be greater than 0.
     */
    public int $capacity;

    /**
     * Error code of the last push() or pop() operation.
     *
     * When no errors occur during a call to method push() or pop(), the value is 0 (SWOOLE_CHANNEL_OK).
     * When some error occurs during a call to method push() or pop(), the call returns FALSE, and $this->errCode is set
     * to one of the following values: SWOOLE_CHANNEL_TIMEOUT, SWOOLE_CHANNEL_CLOSED, or SWOOLE_CHANNEL_CANCELED.
     *
     * @see SWOOLE_CHANNEL_OK
     * @see SWOOLE_CHANNEL_TIMEOUT
     * @see SWOOLE_CHANNEL_CLOSED
     * @see SWOOLE_CHANNEL_CANCELED
     */
    public int $errCode = SWOOLE_CHANNEL_OK;

    /**
     * @param int $size Size of the channel. This indicates the maximum number of elements that can be stored in the channel. It has to be greater than 0.
     * @pseudocode-included This is a built-in method in Swoole. The PHP code included inside this method is for explanation purpose only.
     */
    public function __construct(int $size = 1)
    {
        // Here are some statements to create the channel using local memory within the process.

        $this->capacity = max(1, $size);
    }

    /**
     * Push an element into the channel.
     *
     * @param mixed $data The element to be pushed into the channel. It's allowed to be any type of value. However, to avoid any confusion, it's recommended not to use empty values like 0, 0.0, false, ' ', null, etc.
     * @param float $timeout > 0 means waiting for the specified number of seconds. other means no waiting.
     * @return bool TRUE on success. If failed, return FALSE and set the error code ($this->errCode) with a non-zero value.
     */
    public function push(mixed $data, float $timeout = -1): bool
    {
    }

    /**
     * Pop an element from the channel.
     *
     * This pop operation works in a FIFO (first-in-first-out) manner, since elements in the channel are stored in a queue but not a stack.
     *
     * @param float $timeout > 0 means waiting for the specified number of seconds. other means no waiting.
     * @return mixed Remove an element from the front end of the channel, and return the element back. If failed, return FALSE and set the error code ($this->errCode) with a non-zero value.
     */
    public function pop(float $timeout = -1): mixed
    {
    }

    /**
     * @return bool Returns true if the channel is empty, false otherwise.
     */
    public function isEmpty(): bool
    {
    }

    /**
     * @return bool Returns true if the channel is full, false otherwise.
     */
    public function isFull(): bool
    {
    }

    /**
     * Close the channel.
     *
     * After the channel is closed,
     *   1. no more elements can be pushed into it, nor can elements be popped out of it.
     *   2. coroutines that are waiting for elements to be pushed into the channel will be woken up; inside the coroutines, calls to method push() return FALSE.
     *   3. coroutines that are waiting for elements to be popped out of the channel will be woken up; inside the coroutines, calls to method pop() return FALSE.
     *
     * @return bool Returns true on success or false on failure.
     */
    public function close(): bool
    {
    }

    /**
     * Returns stats of the channel.
     *
     * The array returned contains three fields:
     *   1. consumer_num: Number of calls to method `pop()` that are waiting for elements to be pushed into the channel. This happens when the channel is empty.
     *   2. producer_num: Number of calls to method `push()` that are waiting for elements to be popped from the channel. This happens when the channel is full.
     *   3. queue_num: Number of elements in the channel. This is the same as the return value of statement `self::length()`.
     *
     * For example:
     *   [
     *     'consumer_num' => 0, // No calls to method `pop()` in waiting at the moment.
     *     'producer_num' => 1, // The channel is full, and there is one method call to method `push()` that is waiting for elements to be popped from the channel.
     *     'queue_num'    => 2, // There are two elements in the channel. In this case, the size of the channel is also two.
     *   ]
     */
    public function stats(): array
    {
    }

    /**
     * @return int Number of elements in the channel.
     */
    public function length(): int
    {
    }
}
