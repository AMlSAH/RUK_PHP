<?php
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$sumKeys = 0;
$sumValues = 0;
foreach ($arr as $key => $value) {
    $sumKeys += $key;
    $sumValues += $value;
}
echo $sumKeys / $sumValues;
?>