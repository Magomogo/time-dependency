<?php

namespace TimeDependency;

class TestClock extends Clock\AbstractClock
{
    public function now(): \DateTime
    {
        return new \DateTime('11.01.2009 12:30:05');
    }
}
