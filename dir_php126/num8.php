<?php
$str = 'многобайтовые строки требуют особого подхода';
$words = explode(' ', $str);
echo end($words);
?>