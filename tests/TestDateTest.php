<?php

namespace TimeDependency;

use PHPUnit\Framework\TestCase;

class TestDateTest extends TestCase
{
    public function testIsSteady()
    {
        $this->assertEquals('2009-01-11T12:30:05+06:00', TestDate::clock()->now()->format('c'));
    }

    public function testProvidesDifferentDates()
    {
        $this->assertEquals('2009-01-11T00:00:00+06:00', TestDate::today()->format('c'));
        $this->assertEquals('2009-01-12T00:00:00+06:00', TestDate::tomorrow()->format('c'));
        $this->assertEquals('2009-01-10T00:00:00+06:00', TestDate::yesterday()->format('c'));
        $this->assertEquals('2009-01-18T00:00:00+06:00', TestDate::inAWeek()->format('c'));
    }
}
