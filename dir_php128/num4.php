<?php
$str = 'aaa aaa aaa aaa aaa';
$firstSpace = strpos($str, ' ');
$secondSpace = strpos($str, ' ', $firstSpace + 1);
echo $secondSpace;
?>