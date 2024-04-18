<?php

class Solution {

/**
 * @param Integer $x
 * @return Boolean
 */
function isPalindrome($x) { 
    if($x < 0 )
        return false;
    $xReverse = strrev((string)$x);
    $xString = (string)$x;
    if($xString ==$xReverse)
        return true;  
    
    return false;      
}
}