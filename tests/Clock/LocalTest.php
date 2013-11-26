<?php

namespace TimeDependency\Clock;

class LocalTest extends \PHPUnit_Framework_TestCase
{
    public function testLocalClockShowLocalTime()
    {
        $now = new \DateTime();
        $today = $now->setTime(0, 0, 0);
        $clock = new Local();

        $this->assertEquals($today, $clock->today());
    }
}
 