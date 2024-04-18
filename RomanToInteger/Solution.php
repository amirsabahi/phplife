<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $chars = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

         $sArr = str_split($s);
         $sum = 0;
    
        foreach($sArr as $key => $number)
        {
            $sign = 1;
            if(isset($sArr[$key+1]))
            {
                $next = $chars[$sArr[$key+1]];
                if($next>$chars[$number])
                    $sign = -1;
            }
            $sum += $sign * $chars[$number];
        }
    return $sum;
    }
}