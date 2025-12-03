<?php
function hasConsecutiveDuplicates($arr) {
    for ($i = 0; $i < count($arr) - 1; $i++) {
        if ($arr[$i] == $arr[$i + 1]) {
            return true;
        }
    }
    return false;
}
$arr1 = [1, 2, 3, 3, 4];
$arr2 = [1, 2, 3, 4, 5];
var_dump(hasConsecutiveDuplicates($arr1));
var_dump(hasConsecutiveDuplicates($arr2));
?>