<?php
$date = '2025-02-29';
list($year, $month, $day) = explode('-', $date);
if (checkdate($month, $day, $year)) {
    echo 'Дата корректна';
} else {
    echo 'Дата некорректна';
}
?>