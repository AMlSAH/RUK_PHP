<?php
$age = 25;

if ($age < 10 || $age > 99) {
    echo 'Число меньше 10 или больше 99';
} else {
    $sum = floor($age / 10) + ($age % 10);
    
    if ($sum <= 9) {
        echo 'Сумма цифр однозначна';
    } else {
        echo 'Сумма цифр двузначна';
    }
}
?>