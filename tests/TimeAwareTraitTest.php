<?php

namespace TimeDependency;

use PHPUnit\Framework\TestCase;
use TimeDependency\Clock;

class TimeAwareTraitTest extends TestCase
{
    use TimeAware;

    public function testKnowsWhatTimeIsIt()
    {
        $this->assertInstanceOf(Clock\Local::class, $this->clock());
    }

    public function testClockCanBeReplacesWithAMagicClock()
    {
        $this->stopTime();

        $this->assertSame('2009-01-11T12:30:05+06:00', $this->clock()->now()->format(DATE_ATOM));
    }
}
