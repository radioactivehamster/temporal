<?php

namespace tests\Temporal\Calendar;

use Carbon\Carbon;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Temporal\Calendar;
use Temporal\Calendar\Day;

class DaySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Temporal\Calendar\Day');
    }

    function it_should_be_the_year_1970_on_the_unix_epoc()
    {
        $day = Carbon::createFromDate(1970, 1, 1, 'GMT');

        $this->beConstructedWith($day);
        $this->inYear
             ->shouldReturn(1970);
    }

    function it_should_be_january_on_the_unix_epoc()
    {
        $day = Carbon::createFromDate(1970, 1, 1, 'GMT');

        $this->beConstructedWith($day);
        $this->month
             ->shouldReturn('January');
    }

    function it_should_be_thursday_on_the_unix_epoc()
    {
        $day = Carbon::createFromDate(1970, 1, 1, 'GMT');

        $this->beConstructedWith($day);
        $this->name
             ->shouldReturn('Thursday');
    }

    function it_should_be_the_first_month_of_the_year_on_the_unix_epoc()
    {
        $day = Carbon::createFromDate(1970, 1, 1, 'GMT');

        $this->beConstructedWith($day);
        $this->ofMonth
             ->shouldReturn(1);
    }

    function it_should_be_the_fourth_week_of_the_year_on_the_unix_epoc()
    {
        $day = Carbon::createFromDate(1970, 1, 1, 'GMT');

        $this->beConstructedWith($day);
        $this->ofWeek
             ->shouldReturn(4);
    }

    function it_should_be_the_correct_timestamp_on_the_unix_epoc()
    {
        $day = Carbon::createFromDate(1970, 1, 1, 'GMT');

        $this->beConstructedWith($day);
        $this->timestamp
             ->shouldReturn('1970-01-01T00:00:00+0000');
    }

    function it_should_be_set_to_the_gmt_timezone()
    {
        $day = Carbon::createFromDate(1970, 1, 1, 'GMT');

        $this->beConstructedWith($day);
        $this->timezone
             ->shouldReturn('GMT');
    }
}
