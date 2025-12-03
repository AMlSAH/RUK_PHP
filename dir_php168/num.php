<?php
$date1 = '2020-11-30';
$date2 = '2020-12-01';

$timestamp1 = strtotime($date1);
$timestamp2 = strtotime($date2);

if ($timestamp1 < $timestamp2) {
    echo "$date2 больше, чем $date1";
} elseif ($timestamp1 > $timestamp2) {
    echo "$date1 больше, чем $date2";
} else {
    echo "Даты равны";
}
?>