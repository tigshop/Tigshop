<?php
namespace STS\Backoff\Strategies;

/**
 * Class ExponentialStrategy
 * @package STS\Backoff\Strategies
 */
class ExponentialStrategy extends AbstractStrategy
{
    /**
     * @param int $attempt
     *
     * @return int
     */
    public function getWaitTime($attempt)
    {
        return (int) ($attempt == 1
            ? $this->base
            : pow(2, $attempt) * $this->base
        );
    }
}
