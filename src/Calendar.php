<?php

namespace Temporal;

use ArrayObject;
use Temporal\Calendar\Day;
use Temporal\Calendar\Month;
use Temporal\Calendar\Week;

class Calendar extends ArrayObject
{
    /**
     * @return Day
     */
    public static function day()
    {
        return new Day;
    }

    /**
     * @return Month
     */
    public static function month()
    {
        return new Month;
    }

    /**
     * @return Week
     */
    public static function week()
    {
        return new Week;
    }
}
