<?php
$days = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
$currentDay = 3; // Например, среда
foreach ($days as $index => $day) {
    if ($index + 1 == $currentDay) {
        echo "<i>$day</i> ";
    } else {
        echo "$day ";
    }
}
?>