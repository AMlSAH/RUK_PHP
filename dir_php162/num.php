<?php
$date = '2025-12-31';
list($year, $month, $day) = explode('-', $date);
if (checkdate($month, $day, $year)) {
    echo 'Дата корректна';
} else {
    echo 'Дата некорректна';
}
?>