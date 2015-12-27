<?php

namespace Temporal\Calendar;

use ArrayObject;
use Carbon\Carbon;

class Week extends ArrayObject
{
    /**
     * Month constructor.
     */
    public function __construct()
    {
        $day        = Carbon::now()->startOfWeek();
        $daysInWeek = 7;
        $daysOfWeek = range(1, $daysInWeek);

        foreach ($daysOfWeek as $dayOfWeek) {
            $this->offsetSet($dayOfWeek, new Day($day));
            $day->addDay();
        }
    }

    /**
     * Get the ISO 8601 weekday name via it's number.
     *
     * @param  $day int
     * @return string
     */
    public static function getName($day)
    {
        $days = [
            1  => 'Monday',
            2  => 'Tuesday',
            3  => 'Wednesday',
            4  => 'Thursday',
            5  => 'Friday',
            6  => 'Saturday',
            7  => 'Sunday'
        ];

        return $days[$day];
    }
}
