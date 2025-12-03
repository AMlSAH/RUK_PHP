<?php
$arr = [];

for ($i = 0; $i < 3; $i++) {
    $subArray = [];
    for ($j = 1; $j <= 5; $j++) {
        $subArray[] = $j;
    }
    $arr[] = $subArray;
}

print_r($arr);
?>