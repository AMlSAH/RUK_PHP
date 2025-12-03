<?php
$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];
$newArr = [];
foreach ($arr as $value) {
    $firstDigit = substr((string)$value, 0, 1);
    if ($firstDigit == '1' || $firstDigit == '2') {
        $newArr[] = $value;
    }
}
print_r($newArr);
?>