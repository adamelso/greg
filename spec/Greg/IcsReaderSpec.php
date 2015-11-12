<?php

namespace spec\Greg;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IcsReaderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Greg\IcsReader');
    }
}
