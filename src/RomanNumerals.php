<?php

class RomanNumerals
{
    /**
     * String values for key numers
     * @var array
     */
    protected static $table = [
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
