<?php 
function conversion($temp) {
    return ($temp * 1.8 + 32) . '°F';
}
print(conversion(10));
