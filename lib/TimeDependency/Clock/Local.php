<?php
namespace TimeDependency\Clock;

class Local extends AbstractClock
{
    /**
     * @return \DateTime
     */
    public function now(): \DateTime
    {
        return new \DateTime;
    }
}
