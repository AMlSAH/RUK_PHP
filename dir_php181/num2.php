<?php
function allDigitsOdd($num) {
    $str = (string)$num;
    for ($i = 0; $i < strlen($str); $i++) {
        $digit = (int)$str[$i];
        if ($digit % 2 == 0) {
            return false;
        }
    }
    return true;
}
$num1 = 13579;
$num2 = 12345;
var_dump(allDigitsOdd($num1));
var_dump(allDigitsOdd($num2));
?>