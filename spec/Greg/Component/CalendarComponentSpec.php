<?php

namespace spec\Greg\Component;

use Greg\ProductIdentifier;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalendarComponentSpec extends ObjectBehavior
{
    function let(ProductIdentifier $productIdentifier)
    {
        $this->beConstructedWith($productIdentifier);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Greg\Component\CalendarComponent');
    }

    function it_is_a_component()
    {
        $this->shouldImplement('Greg\Component');
    }

    function it_is_named_VCALENDAR()
    {
        $this->getName()->shouldBe('VCALENDAR');
    }

    function it_has_a_product_identifier($productIdentifier)
    {
        $this->getProductIdentifier()->shouldBe($productIdentifier);
    }
}
