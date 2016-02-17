<?php

namespace tests\Temporal;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Temporal\Calendar;
use Temporal\Calendar\Day;
use Temporal\Calendar\Month;
use Temporal\Calendar\Week;

class CalendarSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Temporal\Calendar');
    }

    function it_should_create_a_day_object()
    {
        $this::day()->shouldHaveType('Temporal\Calendar\Day');
    }

    function it_should_create_a_month_object()
    {
        $this::month()->shouldHaveType('Temporal\Calendar\Month');
    }

    function it_should_create_a_week_object()
    {
        $this::week()->shouldHaveType('Temporal\Calendar\Week');
    }
}
