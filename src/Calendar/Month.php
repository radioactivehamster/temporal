<?php

namespace Temporal\Calendar;

use ArrayObject;
use Carbon\Carbon;

class Month extends ArrayObject
{
    /**
     * Month constructor.
     */
    public function __construct()
    {
        $day         = Carbon::now()->startOfMonth();
        $daysInMonth = Carbon::now()->daysInMonth;
        $daysOfMonth = range(1, $daysInMonth);

        foreach ($daysOfMonth as $dayOfMonth) {
            $this->offsetSet($dayOfMonth, new Day($day));
            $day->addDay();
        }
    }

    /**
     * @param  $month int
     * @return string
     */
    public static function getName($month)
    {
        $months = [
            1  => 'January',
            2  => 'February',
            3  => 'March',
            4  => 'April',
            5  => 'May',
            6  => 'June',
            7  => 'July',
            8  => 'August',
            9  => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
        ];

        return $months[$month];
    }
}
