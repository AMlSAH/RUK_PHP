<?php
$month = 5;

if ($month == 12 || $month == 1 || $month == 2) {
    echo 'Зима';
} elseif ($month == 3 || $month == 4 || $month == 5) {
    echo 'Весна';
} elseif ($month == 6 || $month == 7 || $month == 8) {
    echo 'Лето';
} elseif ($month == 9 || $month == 10 || $month == 11) {
    echo 'Осень';
} else {
    echo 'Неверный номер месяца';
}
?>