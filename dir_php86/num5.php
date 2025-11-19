<?php
$num = 123321;
$str = (string)$num;

$sum1 = 0;
$sum2 = 0;

for ($i = 0; $i < 3; $i++) {
    $sum1 += (int)$str[$i];
    $sum2 += (int)$str[$i + 3];
}

if ($sum1 === $sum2) {
    echo 'Суммы первых и последних трех цифр равны';
} else {
    echo 'Суммы первых и последних трех цифр не равны';
}
?>