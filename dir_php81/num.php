<?php
$minute = 25;

if ($minute >= 0 && $minute < 20) {
    echo 'Первая треть часа';
} elseif ($minute >= 20 && $minute < 40) {
    echo 'Вторая треть часа';
} elseif ($minute >= 40 && $minute < 60) {
    echo 'Третья треть часа';
} else {
    echo 'Неверное количество минут';
}
?>