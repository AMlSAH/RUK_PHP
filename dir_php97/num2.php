<?php
$arr = [2, 4, 6, -3, 8, 10];
$sum = 0;
foreach ($arr as $value) {
    if ($value < 0) {
        break;
    }
    $sum += $value;
}
echo $sum;
?>