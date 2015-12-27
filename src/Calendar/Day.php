<?php

namespace Temporal\Calendar;

use Carbon\Carbon;

class Day
{
    /**
     * @var int
     */
    public $inYear;

    /**
     * @var string
     */
    public $month;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ofMonth;

    /**
     * @var int
     */
    public $ofWeek;

    /**
     * An ISO 8601 timestamp.
     *
     * @var string
     */
    public $timestamp;

    /**
     * Day constructor.
     *
     * @param Carbon $day
     */
    public function __construct(Carbon $day = null)
    {
        // Creating a `$today` variable with a zeroed timestamp.
        $day         = $day ?: Carbon::create();
        $day->hour   = 0;
        $day->minute = 0;
        $day->second = 0;

        // Setting the object properties.
        $this->inYear    = $day->year;
        $this->month     = Month::getName($day->month);
        $this->ofMonth   = $day->day;
        $this->ofWeek    = $day->dayOfWeek;
        $this->name      = $this->_getName();
        $this->timestamp = $day->toIso8601String();
    }

    /**
     * Gets the day's name.
     *
     * @return string
     */
    protected function _getName()
    {
        switch ($this->ofWeek) {
            case Carbon::SUNDAY:
                $name = 'Sunday';
                break;

            case Carbon::MONDAY:
                $name = 'Monday';
                break;

            case Carbon::TUESDAY:
                $name = 'Tuesday';
                break;

            case Carbon::WEDNESDAY:
                $name = 'Wednesday';
                break;

            case Carbon::THURSDAY:
                $name = 'Thursday';
                break;

            case Carbon::FRIDAY:
                $name = 'Friday';
                break;

            case Carbon::SATURDAY:
                $name = 'Saturday';
                break;

            default:
                $name = '';
        }

        return $name;
    }
}
