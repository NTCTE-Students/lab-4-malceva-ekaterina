<?php 
function password($length) {
    $char = '01234567890123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charLen = strlen($char);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $char[random_int(0, $charLen - 1)];
    }

    return $randomString;
}
print(password(8));