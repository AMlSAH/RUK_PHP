<?php
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$diff1 = array_diff($arr1, $arr2);
$diff2 = array_diff($arr2, $arr1);
$symmetricDiff = array_merge($diff1, $diff2);
print_r($symmetricDiff);
?>