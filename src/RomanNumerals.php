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

        if($num == 5){
            $roman .= 'V';
            $num -= $num;
        }

        if($num == 4){
            $roman .= 'IV';
            $num -= $num;
        }

        for(; $num >= 1; $num--){
            $roman .= 'I';
        }

        return $roman;
    }
}
