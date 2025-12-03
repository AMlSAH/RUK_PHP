<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;

foreach ($arr as $value) {
    $sum += $value * $value;
}

echo sqrt($sum);
?>