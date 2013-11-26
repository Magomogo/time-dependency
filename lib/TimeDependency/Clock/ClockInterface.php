<?php
namespace TimeDependency\Clock;

interface ClockInterface {
    /**
     * @return \DateTime
     */
    public function now();

    /**
     * @return \DateTime
     */
    public function today();
}