<?php
$arr = [];

for ($i = 0; $i < 3; $i++) {
    $subArray = [];
    for ($j = 0; $j < 4; $j++) {
        $subArray[] = 'x';
    }
    $arr[] = $subArray;
}

print_r($arr);
?>