<?php
$date1 = '09-21';
$date2 = '09-23';

$year = date('Y');
$fullDate1 = date_create($year . '-' . $date1);
$fullDate2 = date_create($year . '-' . $date2);

if ($fullDate1 < $fullDate2) {
    echo "$date2 больше, чем $date1";
} elseif ($fullDate1 > $fullDate2) {
    echo "$date1 больше, чем $date2";
} else {
    echo "Даты равны";
}
?>