<?php
$arr = [];
$value = 1;

for ($i = 0; $i < 4; $i++) {
    $subArray = [];
    for ($j = 0; $j < 2; $j++) {
        $subArray[] = $value;
        $value++;
    }
    $arr[] = $subArray;
}

print_r($arr);
?>