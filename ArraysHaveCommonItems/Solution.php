<?php
class Solution 
{
    public static function arraysHaveCommonSolution(array $container1, array $container2): bool
    {
        $containerMap= [];
        foreach($container1 as $item)
        {
            $containerMap[$item] = true;
        }
        foreach($container2 as $item)
        {
            if(isset($containerMap[$item]))
            {
                return true;
            }
        }
        return false;
    }
}


var_dump(Solution::arraysHaveCommonSolution(["a", null, 1, "f"], [null, "z", "x"]));
