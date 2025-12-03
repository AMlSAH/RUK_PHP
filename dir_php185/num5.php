<?php
function getDayOfWeek($date) {
    $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    $timestamp = strtotime($date);
    $dayNumber = date('w', $timestamp);
    return $days[$dayNumber];
}
echo getDayOfWeek('2023-12-31');
?>