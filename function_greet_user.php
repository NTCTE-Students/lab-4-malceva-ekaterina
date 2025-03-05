<?php

function greetUser($name = 'гость') {
    echo "Привет, {$name}! <br>";
}

// Вызов функции
greetUser();
greetUser('Анна');