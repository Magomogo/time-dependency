<?php
namespace TimeDependency\Clock;

interface ClockInterface
{
    /**
     * @return \DateTime
     */
    public function now(): \DateTime;

    /**
     * @return \DateTime
     */
    public function today(): \DateTime;
}
