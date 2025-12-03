<?php
function getCurrentDay() {
    $days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
    $dayNumber = date('w');
    return $days[$dayNumber];
}
echo getCurrentDay();
?>