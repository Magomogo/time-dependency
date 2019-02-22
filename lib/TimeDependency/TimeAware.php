<?php

namespace TimeDependency;

use TimeDependency\Clock;

trait TimeAware
{
    /**
     * @var Clock\ClockInterface|null
     */
    private $testClock;

    /**
     * @return Clock\ClockInterface
     */
    protected function clock(): Clock\ClockInterface
    {
        return $this->testClock ?: new Clock\Local();
    }

    protected function stopTime(Clock\ClockInterface $clock = null)
    {
        $this->testClock = $clock ?? new TestClock();
    }
}
