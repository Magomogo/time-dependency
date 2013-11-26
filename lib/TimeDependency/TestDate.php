<?php
namespace TimeDependency;

class TestClock extends Clock\AbstractClock
{
    public function now()
    {
        return new \DateTime('11.01.2009 12:30:05');
    }
}

class TestDate
{
    /**
     * @return \DateTime
     */
    public static function tomorrow()
    {
        return self::today()->add(new \DateInterval('P1D'));
    }

    public static function yesterday()
    {
        return self::today()->sub(new \DateInterval('P1D'));
    }

    public static function inDays($days)
    {
        return self::today()->add(new \DateInterval('P' . $days . 'D'));
    }

    public static function aDaysAgo($days)
    {
        return self::today()->sub(new \DateInterval('P' . $days . 'D'));
    }

    public static function aWeekAgo()
    {
        return self::aDaysAgo(7);
    }

    public static function inAWeek()
    {
        return self::inDays(7);
    }

    public static function aMonthAgo()
    {
        return self::today()->sub(new \DateInterval('P1M'));
    }

    public static function inAMonth()
    {
        return self::today()->add(new \DateInterval('P1M'));

    }

    public static function inAYear()
    {
        return self::today()->add(new \DateInterval('P1Y'));
    }

    public static function aYearAgo()
    {
        return self::today()->sub(new \DateInterval('P1Y'));
    }

    /**
     * @return \DateTime
     */
    public static function today()
    {
        return self::clock()->today();
    }

    public static function clock()
    {
        return new TestClock;
    }
}
