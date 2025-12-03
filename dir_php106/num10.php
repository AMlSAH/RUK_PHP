<?php
$arr = [1, 2, 3, 4, 5];
$sum = 0;
$count = 0;
foreach ($arr as $value) {
    $sum += $value;
    $count++;
}
echo $sum / $count;
?>