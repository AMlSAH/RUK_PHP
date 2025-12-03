<?php
$letters = range('a', 'z');
shuffle($letters);
$result = implode('', array_slice($letters, 0, 6));
echo $result;
?>