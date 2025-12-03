<?php
$arr = [1, -2, 3, -4, 5];
$sum = 0;
foreach ($arr as $value) {
    if ($value > 0) {
        $sum += $value;
    }
}
echo $sum;
?>