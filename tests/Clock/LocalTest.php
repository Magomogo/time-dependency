<?php

namespace TimeDependency\Clock;

use PHPUnit\Framework\TestCase;

class LocalTest extends TestCase
{
    public function testLocalClockShowLocalTime()
    {
        $now = new \DateTime();
        $today = $now->setTime(0, 0, 0);
        $clock = new Local();

        $this->assertEquals($today, $clock->today());
    }
}
