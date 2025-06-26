Given an integer x, return true if x is a palindrome, and false otherwise.

<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0) {
            return false;
        }
    $str = strval($x);
    $rev = strrev($str);
    if ($str == $rev){
        return true;
    }
    else{
        return false;
    }
    }

}
$solution = new Solution();
echo var_export($solution->isPalindrome(10));