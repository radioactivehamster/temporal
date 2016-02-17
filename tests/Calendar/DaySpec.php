<?php

namespace tests\Temporal\Calendar;

use Carbon\Carbon;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Temporal\Calendar;
use Temporal\Calendar\Day;

class DaySpec extends ObjectBehavior
{
    /**
     * Setup that runs before every test.
     */
    function let()
    {
        $unixEpoc = Carbon::createFromDate(1970, 1, 1, 'GMT');

        $this->beConstructedWith($unixEpoc);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Temporal\Calendar\Day');
    }

    function it_should_be_the_year_1970_on_the_unix_epoc()
    {
        $this->inYear->shouldReturn(1970);
    }

    function it_should_be_january_on_the_unix_epoc()
    {
        $this->month->shouldReturn('January');
    }

    function it_should_be_thursday_on_the_unix_epoc()
    {
        $this->name->shouldReturn('Thursday');
    }

    function it_should_be_the_first_month_of_the_year_on_the_unix_epoc()
    {
        $this->ofMonth->shouldReturn(1);
    }

    function it_should_be_the_fourth_week_of_the_year_on_the_unix_epoc()
    {
        $this->ofWeek->shouldReturn(4);
    }

    function it_should_be_the_correct_timestamp_on_the_unix_epoc()
    {
        $this->timestamp->shouldReturn('1970-01-01T00:00:00+0000');
    }

    function it_should_be_set_to_the_gmt_timezone()
    {
        $this->timezone->shouldReturn('GMT');
    }

    function it_should_stringify_to_thursday_on_the_unix_epoc()
    {
        assert((string) $this->getWrappedObject() === 'Thursday');
    }
}
