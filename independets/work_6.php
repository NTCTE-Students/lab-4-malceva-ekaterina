<?php
function sum($num) {
    $arr = str_split($num);
    $result = 0;
    foreach ($arr as $i) {
        $result += $i;
    }
    return $result;
}
print(sum(12345));