<?php
function getZodiacSign($month, $day) {
    if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
        return "Овен";
    } elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
        return "Телец";
    } elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) {
        return "Близнецы";
    } elseif (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) {
        return "Рак";
    } elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
        return "Лев";
    } elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
        return "Дева";
    } elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) {
        return "Весы";
    } elseif (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) {
        return "Скорпион";
    } elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
        return "Стрелец";
    } elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
        return "Козерог";
    } elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
        return "Водолей";
    } elseif (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
        return "Рыбы";
    } else {
        return "Неверная дата";
    }
}

$date = '09-21'; // Пример даты
list($month, $day) = explode('-', $date);
$month = (int)$month;
$day = (int)$day;

echo getZodiacSign($month, $day);
?>