<?php

namespace tests\Temporal\Calendar;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MonthSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Temporal\Calendar\Month');
    }
}
