<?php
$date = '2023-12-25';
$days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Саббота'];
$dayNumber = date('w', strtotime($date));
echo $days[$dayNumber];
?>