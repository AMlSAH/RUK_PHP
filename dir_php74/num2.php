<?php
$day = 15;

if ($day < 1 || $day > 31) {
    echo 'Ошибка: число должно быть от 1 до 31';
} elseif ($day >= 1 && $day <= 10) {
    echo 'Первая декада';
} elseif ($day >= 11 && $day <= 20) {
    echo 'Вторая декада';
} else {
    echo 'Третья декада';
}
?>