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
        $this::day()->shouldBeAnInstanceOf('Temporal\Calendar\Day');
    }
}
