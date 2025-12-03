<?php
$str = 'word※word※word※word';
$arr = mb_split('※', $str);
print_r($arr);
?>