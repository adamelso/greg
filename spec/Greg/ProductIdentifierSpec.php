<?php

namespace spec\Greg;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductIdentifierSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('ArchFizz', 'Greg', 'EN');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Greg\ProductIdentifier');
    }

    function it_contains_the_organization_name()
    {
        $this->getOrganization()->shouldBe('ArchFizz');
    }

    function it_contains_the_product_name()
    {
        $this->getProduct()->shouldBe('Greg');
    }

    function it_contains_the_ISO_639_1_language_code()
    {
        $this->getLanguage()->shouldBe('en');
    }
}
