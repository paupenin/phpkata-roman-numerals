<?php

class RomanNumerals
{
    /**
     * String values for key numers
     * @var array
     */
    protected static $table = [
        1000   => 'M',
        900   => 'CM',
        500   => 'D',
        400   => 'CD',
        100   => 'C',
        90   => 'XC',
        50   => 'L',
        40   => 'XL',
        10   => 'X',
        9   => 'IX',
        5   => 'V',
        4   => 'IV',
        1   => 'I'
    ];

    /**
     * Convert integer to roman numeral string
     * @param  integer $num
     * @return string
     */
    public function convert($num)
    {
        $roman = '';

        foreach(static::$table as $key => $glyph)
        {
            for(; $num >= $key; $num -= $key)
            {
                $roman .= $glyph;
            }
        }

        return $roman;
    }
}
