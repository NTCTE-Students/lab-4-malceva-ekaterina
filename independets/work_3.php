<?php
function count_word($str) {
    $arr = explode(" ", $str);
    return count($arr);
}
print(count_word("Слова слова слова"));
