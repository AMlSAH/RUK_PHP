<?php
$arr = [
    [
        [1, 2, 3],
        [6, 7, 8],
        [3, 8, 4],
        [6, 7, 9],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
    ],
    [
        [9, 1, 2],
        [4, 5, 6],
        [5, 6, 3],
    ],
];

$sum = 0;

foreach ($arr as $firstLevel) {
    foreach ($firstLevel as $secondLevel) {
        foreach ($secondLevel as $value) {
            $sum += $value;
        }
    }
}

echo $sum;
?>