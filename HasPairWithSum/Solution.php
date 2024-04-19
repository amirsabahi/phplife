<?php
class Solution 
{
    public static function hasPairWithSum(array $container1, int $sum): bool
    {
        $contains = [];
        for($i=0; $i<count($container1); $i++)
        {
            if(in_array($container1[$i], $contains))
            {
                return true;
            }
            array_push($contains, $sum-$container1[$i]);
        }

        return false;
    }
}


var_dump(Solution::hasPairWithSum([1,2,3,8], 10));
