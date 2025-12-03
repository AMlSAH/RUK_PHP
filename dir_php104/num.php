<?php
$arr = [10, 20, 30, 40, 21, 32, 51];
$sum = 0;

foreach ($arr as $num) {
    $firstDigit = (int)substr((string)$num, 0, 1);
    if ($firstDigit == 1 || $firstDigit == 2) {
        $sum += $num;
    }
}

echo $sum;
?>