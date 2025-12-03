<?php
$arr = [];
$value = 2;

for ($i = 0; $i < 4; $i++) {
    $subArray = [];
    for ($j = 0; $j < 3; $j++) {
        $subArray[] = $value;
        $value += 2;
    }
    $arr[] = $subArray;
}

print_r($arr);
?>