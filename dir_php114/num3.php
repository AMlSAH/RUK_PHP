<?php
$arr = [];

for ($i = 0; $i < 3; $i++) {
    $firstLevel = [];
    for ($j = 0; $j < 2; $j++) {
        $secondLevel = [];
        for ($k = 1; $k <= 5; $k++) {
            $secondLevel[] = $k;
        }
        $firstLevel[] = $secondLevel;
    }
    $arr[] = $firstLevel;
}

print_r($arr);
?>