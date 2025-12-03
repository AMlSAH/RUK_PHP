<?php
$arr = [];
$value = 1;

for ($i = 0; $i < 2; $i++) {
    $firstLevel = [];
    for ($j = 0; $j < 2; $j++) {
        $secondLevel = [];
        for ($k = 0; $k < 2; $k++) {
            $secondLevel[] = $value;
            $value++;
        }
        $firstLevel[] = $secondLevel;
    }
    $arr[] = $firstLevel;
}

print_r($arr);
?>