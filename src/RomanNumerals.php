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
     * @param  integer | string $num
     * @return string | integer
     */
    public function convert($num)
    {
        if( is_numeric($num) ){
           return $this->toRoman($num);
        }
        if( is_string($num) ){
           return $this->toNumeric($num);
        }
    }

    /**
     * Convert number to roman string
     * @param  integer $num
     * @return string
     */
    private function toRoman($num){
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

    /**
     * Convert roman string to numeric
     * @param  string $roman
     * @return integer
     */
    private function toNumeric($roman){
        $num = 0;

        foreach(static::$table as $key => $glyph)
        {
            for(; substr($roman, 0, strlen($glyph)) == $glyph; $roman = substr($roman, strlen($glyph)) ){
                $num += $key;
            }
        }

        return $num;
    }
}
