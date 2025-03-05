<?php
function factorial($n) {
    $result = 1;
    for ($i = $n; $i != 0; $i--) {
        $result *= $i;
    }
    return $result;
}

// Вызов функции
$result = factorial(5);
print("Факториал 5: {$result}");
?>