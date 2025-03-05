<?php 
function arr(&$arr) {
    $arr = array_unique($arr);
    return $arr;
}
$arr = [1,25, 4, 4, 1];
arr($arr);
