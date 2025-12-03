<?php
date_default_timezone_set('Asia/Tokyo');
echo 'Новый часовой пояс: ' . date_default_timezone_get() . "\n";
echo 'Текущее время: ' . date('H:i:s');
?>