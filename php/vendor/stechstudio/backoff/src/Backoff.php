<?php
namespace STS\Backoff;

use Exception;
use InvalidArgumentException;
use STS\Backoff\Strategies\ConstantStrategy;
use STS\Backoff\Strategies\ExponentialStrategy;
use STS\Backoff\Strategies\LinearStrategy;
use STS\Backoff\Strategies\PolynomialStrategy;

/**
 * Class Retry
 * @package STS\Backoff
 */
class Backoff
{
    /**
     * @var string
     */
    public static $defaultStrategy = "polynomial";

    /**
     * @var int
     */
    public static $defaultMaxAttempts = 5;

    /**
     * @var bool
     */
    public static $defaultJitterEnabled = false;

    /**
     * This callable should take an 'attempt' integer, and return a wait time in milliseconds
     *
     * @var callable
     */
    protected $strategy;

    /**
     * @var array
     */
    protected $strategies = [
        'constant'    => ConstantStrategy::class,
        'linear'      => LinearStrategy::class,
        'polynomial'  => PolynomialStrategy::class,
        'exponential' => ExponentialStrategy::class
    ];

    /**
     * @var int
     */
    protected $maxAttempts;

    /**
     * The max wait time you want to allow, regardless of what the strategy says
     *
     * @var int|null     In milliseconds
     */
    protected $waitCap;

    /**
     * @var bool
     */
    protected $useJitter = false;

    /**
     * @var array
     */
    protected $exceptions = [];

    /**
     * This will decide whether to retry or not.
     * @var callable
     */
    protected $decider;

    /**
     * This receive any exceptions we encounter.
     * @var callable
     */
    protected $errorHandler;

    /**
     * @param int $maxAttempts
     * @param mixed $strategy
     * @param int $waitCap
     * @param bool $useJitter
     * @param callable $decider
     */
    public function __construct(
        $maxAttempts = null,
        $strategy = null,
        $waitCap = null,
        $useJitter = null,
        $decider = null
    ) {
        $this->setMaxAttempts($maxAttempts ?: self::$defaultMaxAttempts);
        $this->setStrategy($strategy ?: self::$defaultStrategy);
        $this->setJitter($useJitter ?: self::$defaultJitterEnabled);
        $this->setWaitCap($waitCap);
        $this->setDecider($decider ?: $this->getDefaultDecider());
    }

    /**
     * @param integer $attempts
     */
    public function setMaxAttempts($attempts)
    {
        $this->maxAttempts = $attempts;
        
         return $this;
    }

    /**
     * @return integer
     */
    public function getMaxAttempts()
    {
        return $this->maxAttempts;
    }

    /**
     * @param int|null $cap
     *
     * @return $this
     */
    public function setWaitCap($cap)
    {
        $this->waitCap = $cap;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getWaitCap()
    {
        return $this->waitCap;
    }

    /**
     * @param bool $useJitter
     *
     * @return $this
     */
    public function setJitter($useJitter)
    {
        $this->useJitter = $useJitter;

        return $this;
    }

    /**
     *
     */
    public function enableJitter()
    {
        $this->setJitter(true);

        return $this;
    }

    /**
     *
     */
    public function disableJitter()
    {
        $this->setJitter(false);

        return $this;
    }

    public function jitterEnabled()
    {
        return $this->useJitter;
    }

    /**
     * @return callable
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * @param mixed $strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->strategy = $this->buildStrategy($strategy);

        return $this;
    }

    /**
     * Builds a callable strategy.
     *
     * @param mixed $strategy   Can be a string that matches a key in $strategies, an instance of AbstractStrategy
     *                          (or any other instance that has an __invoke method), a callback function, or
     *                          an integer (which we interpret to mean you want a ConstantStrategy)
     *
     * @return callable
     */
    protected function buildStrategy($strategy)
    {
        if (is_string($strategy) && array_key_exists($strategy, $this->strategies)) {
            return new $this->strategies[$strategy];
        }

        if (is_callable($strategy)) {
            return $strategy;
        }

        if (is_int($strategy)) {
            return new ConstantStrategy($strategy);
        }

        throw new InvalidArgumentException("Invalid strategy: " . $strategy);
    }

    /**
     * @param callable $callback
     *
     * @return mixed
     * @throws Exception
     */
    public function run($callback)
    {
        $attempt = 0;
        $try = true;

        while ($try) {

            $result = null;
            $exception = null;

            $this->wait($attempt);
            try {
                $result = call_user_func($callback);
            } catch (\Throwable $e) {
                if ($e instanceof \Error) {
                    $e = new Exception($e->getMessage(), $e->getCode(), $e);
                }
                $this->exceptions[] = $e;
                $exception = $e;
            } catch (Exception $e) {
                $this->exceptions[] = $e;
                $exception = $e;
            }
            $try = call_user_func($this->decider, ++$attempt, $this->getMaxAttempts(), $result, $exception);

            if($try && isset($this->errorHandler)) {
                call_user_func($this->errorHandler, $exception, $attempt, $this->getMaxAttempts());
            }
        }

        return $result;
    }

    /**
     * Sets the decider callback
     * @param callable $callback
     * @return $this
     */
    public function setDecider($callback)
    {
        $this->decider = $callback;
        return $this;
    }

    /**
     * Sets the error handler callback
     * @param callable $callback
     * @return $this
     */
    public function setErrorHandler($callback)
    {
        $this->errorHandler = $callback;
        return $this;
    }

    /**
     * Gets a default decider that simply check exceptions and maxattempts
     * @return \Closure
     */
    protected function getDefaultDecider()
    {
        return function ($retry, $maxAttempts, $result = null, $exception = null) {
            if($retry >= $maxAttempts && ! is_null($exception)) {
                throw  $exception;
            }

            return $retry < $maxAttempts && !is_null($exception);
        };
    }

    /**
     * @param int $attempt
     */
    public function wait($attempt)
    {
        if ($attempt == 0) {
            return;
        }

        usleep($this->getWaitTime($attempt) * 1000);
    }

    /**
     * @param int $attempt
     *
     * @return int
     */
    public function getWaitTime($attempt)
    {
        $waitTime = call_user_func($this->getStrategy(), $attempt);

        return $this->jitter($this->cap($waitTime));
    }

    /**
     * @param int $waitTime
     *
     * @return mixed
     */
    protected function cap($waitTime)
    {
        return is_int($this->getWaitCap())
            ? min($this->getWaitCap(), $waitTime)
            : $waitTime;
    }

    /**
     * @param int $waitTime
     *
     * @return int
     */
    protected function jitter($waitTime)
    {
        return $this->jitterEnabled()
            ? mt_rand(0, $waitTime)
            : $waitTime;
    }
}
