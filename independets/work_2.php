<?php 
function palindrome($str) {

    if ($str == strrev($str)) {
        return "Yes";
    } 
    else {
        return "no";
    }
}
print(palindrome("dfd"));
?>