<?php
class Solution {

    /**
     * @param String $string
     * @return String
     */
    function longestPalindrome($string) {
        $res = '';
       for($i=0; $i<strlen($string); $i++) {
            $left = $right = $i;
            while($left>=0 && $right<strlen($string) && $string[$left] == $string[$right]) {
                if($right-$left + 1 > $max) {
                    $max = $right-$left + 1;
                    $start = $left;
                    $end = $right +1 ;
                    $res = substr($string, $left, $right-$left+1);   
                }
                $left--;
                $right++;
            }
            $left = $i;
            $right = $i+1;
            while($left>=0 && $right<strlen($string) && $string[$left] == $string[$right]) {
                if($right-$left + 1 > $max) {
                    $max = $right-$left + 1;
                    $start = $left;
                    $end = $right ;  
                    $res = substr($string, $left, $right-$left+1);   
                }
                $left--;
                $right++;
            }
        }
        return $res;
    }
}

$s = new Solution();
echo $s->longestPalindrome("babdc");  // Output: "bab" or "aba"