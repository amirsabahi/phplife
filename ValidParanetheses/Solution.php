<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $brackets = ["(" => ")", "[" => "]", "{" =>"}"];
        $stack = [];
        for($i = 0; $i<strlen($s); $i++)
        {
            if($brackets[$s[$i]])
            {
                array_push($stack,$s[$i]);
            } else if ($s[$i] != $brackets[ array_pop($stack)]) 
            {
                return false;
            }
        }
        return count($stack) == 0;
    }    
}