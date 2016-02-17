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

    function it_should_be_thursday_on_the_first_day_of_the_unix_epoc()
    {
        $day = Carbon::createFromDate(1970, 1, 1, 'GMT');

        $this->beConstructedWith($day);
        $this->name
             ->shouldReturn('Thursday');
    }
}
