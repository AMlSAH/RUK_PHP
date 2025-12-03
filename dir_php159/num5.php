<?php
$today = date('Y-m-d');
$morningTime = strtotime($today . ' 07:23:48');
$currentTime = time();
$diffSeconds = $currentTime - $morningTime;
$diffHours = floor($diffSeconds / 3600);
echo $diffHours;
?>