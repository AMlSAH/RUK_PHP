<?php
$str = 'abcdef';
$arr = str_split($str);
shuffle($arr);
echo implode('', $arr);
?>