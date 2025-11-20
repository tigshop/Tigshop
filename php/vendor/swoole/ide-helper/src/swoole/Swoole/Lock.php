<?php

declare(strict_types=1);

namespace Swoole;

/**
 * The Lock class provides a way to synchronize concurrent processes.
 *
 * In a multi-process environment, Lock objects should be created in the parent process so that child processes can
 * acquire the locks.
 *
 * It's not recommend to use locks in the event callback functions like onConnect(), onReceive() and so on. This could
 * cause memory leaks since memory usage could keep increasing as new requests keep coming in. In general, it's not
 * recommended to keep creating/destroying locks since this could cause memory leaks.
 *
 * Locks should not be used in coroutines, especially when there are coroutine switching between method calls to
 * \Swoole\Lock::lock() and \Swoole\Lock::unlock(). For example, the following example will cause deadlock:
 *
 *   Swoole\Coroutine\run(function () {
 *       $lock = new Swoole\Lock();
 *       for ($i = 0; $i < 2; $i++) {
 *           Swoole\Coroutine::create(function () use ($lock) {
 *               $lock->lock();
 *               Swoole\Coroutine::sleep(1);
 *               $lock->unlock();
 *           });
 *       }
 *   });
 *
 * If you think you need to use locks with coroutines, you can probably use channels instead.
 *
 * @see https://github.com/deminy/swoole-by-examples/blob/master/examples/csp/deadlocks/swoole-lock.php
 * @not-serializable Objects of this class cannot be serialized.
 */
class Lock
{
    /**
     * Mutex lock.
     */
    public const MUTEX = SWOOLE_MUTEX;

    /**
     * Read-write lock.
     *
     * Supported only if read-write lock is included in the POSIX thread (pthread) libraries.
     */
    public const RWLOCK = SWOOLE_RWLOCK;

    /**
     * Spin lock.
     *
     * Supported only if the Spin Locks option is provided in the POSIX thread (pthread) libraries.
     */
    public const SPINLOCK = SWOOLE_SPINLOCK;

    /**
     * @removed 4.5.3 No longer supported. Please use mutex lock (\Swoole\Lock::MUTEX) instead.
     */
    public const FILELOCK = SWOOLE_FILELOCK;

    /**
     * @removed 4.5.3 No longer supported. Please use mutex lock (\Swoole\Lock::MUTEX) instead.
     */
    public const SEM = SWOOLE_SEM;

    public int $errCode = 0;

    /**
     * Construct a Lock object.
     *
     * Before Swoole 4.5.3, the constructor accepts a second parameter $filename when the lock type is \Swoole\Lock::FILELOCK.
     * Parameter $filename specifies path to the file to be locked.
     *
     * @param int $type Type of the lock. It must be one of the following constants:
     *                  - \Swoole\Lock::MUTEX
     *                  - \Swoole\Lock::RWLOCK
     *                  - \Swoole\Lock::SPINLOCK
     */
    public function __construct(int $type = self::MUTEX)
    {
    }

    /**
     * Lock the lock.
     *
     * If the lock is already acquired by another process, this method will block until the lock is released.
     *
     * @return bool TRUE on success, FALSE on failure.
     * @see \Swoole\Lock::lockwait()
     * @see \Swoole\Lock::trylock()
     */
    public function lock(): bool
    {
    }

    /**
     * Lock the lock with a timeout. If the lock is already locked, it waits for the lock to be released until the
     * specified timeout expires. When the timeout expires and the lock cannot be acquired, it returns FALSE.
     *
     * This method can be used only for mutex locks (when the lock type is \Swoole\Lock::MUTEX).
     *
     * @param float $timeout Wait time, in seconds. Default to 1 second.
     * @return bool TRUE on success, FALSE on failure or timeout expired.
     * @see \Swoole\Lock::lock()
     * @see \Swoole\Lock::trylock()
     */
    public function lockwait(float $timeout = 1.0): bool
    {
    }

    /**
     * Lock the lock in a non-blocking way.
     *
     * This method returns immediately even if the lock is not acquired. Thus, the caller should check the return value
     * to see if the lock is acquired or not.
     *
     * @return bool TRUE on success, FALSE on failure.
     * @see \Swoole\Lock::lock()
     * @see \Swoole\Lock::lockwait()
     */
    public function trylock(): bool
    {
    }

    /**
     * Lock the lock for reading.
     *
     * This method works only for read-write locks (when the lock type is \Swoole\Lock::SWOOLE_RWLOCK). For other types
     * of locks, it works the same as method \Swoole\Lock::lock().
     *
     * A process may hold multiple concurrent read locks on read-write locks. If so, the process must perform matching
     * unlocks (that is, it must call method \Swoole\Lock::lock_read() n times).
     *
     * If the lock is already acquired through method \Swoole\Lock::lock() or \Swoole\Lock::trylock(), this method will
     * block until the lock is released.
     *
     * @return bool TRUE on success, FALSE on failure.
     * @see \Swoole\Lock::trylock_read()
     * @see \Swoole\Lock::lock()
     */
    public function lock_read(): bool
    {
    }

    /**
     * Lock the lock for reading in a non-blocking way.
     *
     * This method works only for read-write locks (when the lock type is \Swoole\Lock::SWOOLE_RWLOCK). For other types
     * of locks, it works the same as method \Swoole\Lock::trylock().
     *
     * This method returns immediately even if the lock is not acquired. Thus, the caller should check the return value
     * to see if the lock is acquired or not.
     *
     * @return bool TRUE on success, FALSE on failure.
     * @see \Swoole\Lock::lock_read()
     * @see \Swoole\Lock::trylock()
     */
    public function trylock_read(): bool
    {
    }

    /**
     * Unlock the lock.
     *
     * @return bool TRUE on success, FALSE on failure.
     */
    public function unlock(): bool
    {
    }

    /**
     * Destroy the lock and release any resources used by the lock.
     *
     * After calling this method, the lock object should not be used anymore.
     */
    public function destroy(): void
    {
    }
}
