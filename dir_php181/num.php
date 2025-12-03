<?php
function allEven($arr) {
    foreach ($arr as $num) {
        if ($num % 2 != 0) {
            return false;
        }
    }
    return true;
}
$arr1 = [2, 4, 6, 8];
$arr2 = [2, 3, 4, 5];
var_dump(allEven($arr1));
var_dump(allEven($arr2));
?>