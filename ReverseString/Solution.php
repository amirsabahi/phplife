<?php

class Solution {
    public static function reverse(string $string):string
    {

        $reverseArray = array_reverse(str_split($string));
        return implode($reverseArray);
    }
}

echo Solution::reverse("hello"); 