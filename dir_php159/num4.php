<?php
$targetTime = mktime(13, 12, 59, 3, 15, 2000);
$currentTime = time();
echo $currentTime - $targetTime;
?>