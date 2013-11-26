<?php
namespace TimeDependency\Clock;

abstract class AbstractClock implements ClockInterface
{

    /**
     * The first timestamp of today: 00:00:00
     *
     * @return \DateTime
     */
    public function today() {
        return $this->now()->setTime(0, 0, 0);
    }

}