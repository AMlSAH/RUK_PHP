<?php
$sum = 0;
$count = 0;
$i = 1;

while ($sum <= 100) {
    $sum += $i;
    $i++;
    $count++;
}

echo $count;
?>