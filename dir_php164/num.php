<?php
$date = '2025-12-31';
$newDate = date('Y-m-d', strtotime($date . ' +2 days'));
echo $newDate;
?>