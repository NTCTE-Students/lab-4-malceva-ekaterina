<?php
function sum($num) {
    $arr = str_split($num);
    $result = 0;
    foreach ($arr as $i) {
        $result += 1;
    }
    return $result;
}
print(sum('popopopop'));