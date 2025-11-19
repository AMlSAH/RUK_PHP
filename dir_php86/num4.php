<?php
$num = 123;
$sum = floor($num / 100) + floor(($num % 100) / 10) + ($num % 10);

echo "Сумма цифр: $sum";
?>