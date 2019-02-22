<?php
namespace TimeDependency;

class TestClock extends Clock\AbstractClock
{
    public function now(): \DateTime
    {
        return new \DateTime('11.01.2009 12:30:05');
    }
}

class TestDate
{
    /**
     * @return \DateTime
     * @throws \Exception
     */
    public static function tomorrow(): \DateTime
    {
        return self::today()->add(new \DateInterval('P1D'));
    }

    /**
     * @return \DateTime
     * @throws \Exception
     */
    public static function yesterday(): \DateTime
    {
        return self::today()->sub(new \DateInterval('P1D'));
    }

    /**
     * @param int $days
     * @return \DateTime
     * @throws \Exception
     */
    public static function inDays(int $days): \DateTime
    {
        return self::today()->add(new \DateInterval('P' . $days . 'D'));
    }

    /**
     * @param int $days
     * @return \DateTime
     * @throws \Exception
     */
    public static function aDaysAgo(int $days): \DateTime
    {
        return self::today()->sub(new \DateInterval('P' . $days . 'D'));
    }

    /**
     * @return \DateTime
     * @throws \Exception
     */
    public static function aWeekAgo(): \DateTime
    {
        return self::aDaysAgo(7);
    }

    /**
     * @return \DateTime
     * @throws \Exception
     */
    public static function inAWeek(): \DateTime
    {
        return self::inDays(7);
    }

    /**
     * @return \DateTime
     * @throws \Exception
     */
    public static function aMonthAgo(): \DateTime
    {
        return self::today()->sub(new \DateInterval('P1M'));
    }

    /**
     * @return \DateTime
     * @throws \Exception
     */
    public static function inAMonth(): \DateTime
    {
        return self::today()->add(new \DateInterval('P1M'));

    }

    /**
     * @return \DateTime
     * @throws \Exception
     */
    public static function inAYear(): \DateTime
    {
        return self::today()->add(new \DateInterval('P1Y'));
    }

    /**
     * @return \DateTime
     * @throws \Exception
     */
    public static function aYearAgo(): \DateTime
    {
        return self::today()->sub(new \DateInterval('P1Y'));
    }

    /**
     * @return \DateTime
     */
    public static function today(): \DateTime
    {
        return self::clock()->today();
    }

    public static function clock(): TestClock
    {
        return new TestClock;
    }
}
