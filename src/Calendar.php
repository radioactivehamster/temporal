<?php

namespace Temporal;

use ArrayObject;
use Temporal\Calendar\Day;
use Temporal\Calendar\Month;

class Calendar extends ArrayObject
{
    public static function day()
    {
        return new Day;
    }

    public static function month()
    {
        return new Month;
    }
}