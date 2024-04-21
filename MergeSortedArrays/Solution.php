<?php

class Solution {
    public static function mergeArrays(array $array1, array $array2): array
    {
        $result = [];
        $i = 0;
        $j = 0;
        while($i< count($array1) && $j < count($array2)) {
            if($array1[$i] < $array2[$j]) {
                $result[] = $array1[$i];
                $i++;
            } else {
                $result[] = $array2[$j];
                $j++;
            }
        }
        while ($i < count($array1)) {
            echo "\n1 ".$array1[$i]."\n";
            $result[] = $array1[$i];
            $i++;
        }

        // If there are remaining elements in array2, append them to the result
        while ($j < count($array2)) {
            echo "\n2".$array2[$j]."\n";
            $result[] = $array2[$j];
            $j++;
        }
        return $result;
    }
}

echo implode(" ", Solution::mergeArrays([0, 3, 4, 30, 32,33,39], [4, 6, 31, 33])); // 1 2 3 4 5 6