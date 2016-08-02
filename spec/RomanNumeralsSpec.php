<?php

namespace spec;

use RomanNumerals;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralsSpec extends ObjectBehavior
{
    /**
     * initializable test
     */
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumerals::class);
    }

    /**
     * factorization tests
     */
    function it_converts_1_as_I(){
        $this->convert(1)->shouldReturn('I');
    }

    function it_converts_2_as_II(){
        $this->convert(2)->shouldReturn('II');
    }

    function it_converts_3_as_III(){
        $this->convert(3)->shouldReturn('III');
    }
}