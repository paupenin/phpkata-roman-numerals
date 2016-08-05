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
     * conversion tests up to 20
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

    function it_converts_4_as_IV(){
        $this->convert(4)->shouldReturn('IV');
    }

    function it_converts_5_as_V(){
        $this->convert(5)->shouldReturn('V');
    }

    function it_converts_6_as_VI(){
        $this->convert(6)->shouldReturn('VI');
    }

    function it_converts_7_as_VII(){
        $this->convert(7)->shouldReturn('VII');
    }

    function it_converts_8_as_VIII(){
        $this->convert(8)->shouldReturn('VIII');
    }

    function it_converts_9_as_IX(){
        $this->convert(9)->shouldReturn('IX');
    }

    function it_converts_10_as_X(){
        $this->convert(10)->shouldReturn('X');
    }

    function it_converts_11_as_XI(){
        $this->convert(11)->shouldReturn('XI');
    }

    function it_converts_12_as_XII(){
        $this->convert(12)->shouldReturn('XII');
    }

    function it_converts_13_as_XIII(){
        $this->convert(13)->shouldReturn('XIII');
    }

    function it_converts_14_as_XIV(){
        $this->convert(14)->shouldReturn('XIV');
    }

    function it_converts_15_as_XV(){
        $this->convert(15)->shouldReturn('XV');
    }

    function it_converts_16_as_XVI(){
        $this->convert(16)->shouldReturn('XVI');
    }

    function it_converts_17_as_XVI(){
        $this->convert(17)->shouldReturn('XVII');
    }

    function it_converts_18_as_XVI(){
        $this->convert(18)->shouldReturn('XVIII');
    }

    function it_converts_19_as_XVI(){
        $this->convert(19)->shouldReturn('XIX');
    }

    function it_converts_20_as_XVI(){
        $this->convert(20)->shouldReturn('XX');
    }

    /**
     * complex conversion tests
     */
    function it_converts_44_as_XLIV(){
        $this->convert(44)->shouldReturn('XLIV');
    }

    function it_converts_78_as_LXXVIII(){
        $this->convert(78)->shouldReturn('LXXVIII');
    }

    function it_converts_99_as_XCIX(){
        $this->convert(99)->shouldReturn('XCIX');
    }

    function it_converts_127_as_CXXVII(){
        $this->convert(127)->shouldReturn('CXXVII');
    }

    function it_converts_483_as_CDLXXXIII(){
        $this->convert(483)->shouldReturn('CDLXXXIII');
    }

    function it_converts_891_as_DCCCXCI(){
        $this->convert(891)->shouldReturn('DCCCXCI');
    }

    function it_converts_999_as_CMXCIX(){
        $this->convert(999)->shouldReturn('CMXCIX');
    }

    function it_converts_1115_as_MCXV(){
        $this->convert(1115)->shouldReturn('MCXV');
    }

    function it_converts_1989_as_MCMLXXXIX(){
        $this->convert(1989)->shouldReturn('MCMLXXXIX');
    }

    function it_converts_2016_as_MMXVI(){
        $this->convert(2016)->shouldReturn('MMXVI');
    }

    /**
     * complex roman conversion tests
     */
    function it_converts_XLIV_as_44(){
        $this->convert('XLIV')->shouldReturn(44);
    }

    function it_converts_LXXVIII_as_78(){
        $this->convert('LXXVIII')->shouldReturn(78);
    }

    function it_converts_XCIX_as_99(){
        $this->convert('XCIX')->shouldReturn(99);
    }

    function it_converts_CXXVII_as_127(){
        $this->convert('CXXVII')->shouldReturn(127);
    }

    function it_converts_CDLXXXIII_as_483(){
        $this->convert('CDLXXXIII')->shouldReturn(483);
    }

    function it_converts_DCCCXCI_as_891(){
        $this->convert('DCCCXCI')->shouldReturn(891);
    }

    function it_converts_CMXCIX_as_999(){
        $this->convert('CMXCIX')->shouldReturn(999);
    }

    function it_converts_MCXV_as_1115(){
        $this->convert('MCXV')->shouldReturn(1115);
    }

    function it_converts_MCMLXXXIX_as_1989(){
        $this->convert('MCMLXXXIX')->shouldReturn(1989);
    }

    function it_converts_MMXVI_as_2016(){
        $this->convert('MMXVI')->shouldReturn(2016);
    }
}
