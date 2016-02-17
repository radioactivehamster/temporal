<?php

namespace tests\Temporal\Calendar;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DaySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Temporal\Calendar\Day');
    }
}
