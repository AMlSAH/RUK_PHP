<?php
function sumDigits($num) {
    $sum = 0;
    $str = (string)$num;
    for ($i = 0; $i < strlen($str); $i++) {
        $sum += (int)$str[$i];
    }
    return $sum;
}
echo sumDigits(12345);
?>