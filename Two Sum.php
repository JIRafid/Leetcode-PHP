/*
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
You may assume that each input would have exactly one solution, and you may not use the same element twice.
You can return the answer in any order.
*/


<?php

class Solution {

        /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */

    function twoSum($nums, $target) {
        foreach ($nums as $i => $value1) {
            foreach ($nums as $j => $value2){
                if ($i != $j && $value1 + $value2 == $target){
                    return [$i, $j];
                }
            }
        }
    }    
}

$solution = new Solution();
//$solution->twoSum([2,7,11,15], 9);
print_r($solution->twoSum([2,7,11,15], 9));