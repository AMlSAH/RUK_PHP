<?php
$arr = [10, 20, 30, 50, 235, 3000];
foreach ($arr as $value) {
    $firstDigit = (string)$value[0];
    if ($firstDigit == '1' || $firstDigit == '2' || $firstDigit == '5') {
        echo $value . " ";
    }
}
?>