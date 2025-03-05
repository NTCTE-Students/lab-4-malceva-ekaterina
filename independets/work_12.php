<?php 
function prostoe($num) {
    $count = 0;
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $count++;
        }
    }
    if ($count == 2 || $num == 1) {
        return"Простое";
    } else {
        return"No";

    }
}
print(prostoe(4));