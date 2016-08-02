<?php

class RomanNumerals
{
    /**
     * Convert integer to roman numeral string
     * @param  integer $num
     * @return string
     */
    public function convert($num)
    {
        $roman = '';

        for(; $num >= 1; $num--){
            $roman .= 'I';
        }

        return $roman;
    }
}
