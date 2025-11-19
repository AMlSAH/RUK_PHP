<?php
$num = 12345;
$firstDigit = (string)$num[0];

if ($firstDigit === '1' || $firstDigit === '2' || $firstDigit === '3') {
    echo 'Первая цифра 1, 2 или 3';
} else {
    echo 'Первая цифра не 1, 2 или 3';
}
?>