<?php

namespace spec\Greg;

use Greg\Component;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IcalendarSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Greg\Icalendar');
    }

    function it_contains_a_component(Component $component)
    {
        $this->setComponent($component);
        $this->getComponent()->shouldReturn($component);
    }
}
