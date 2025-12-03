<?php
$arr = [1, 2, 3, 4, 5];
function func($arr) {
    $res = 0;
    foreach ($arr as $elem) {
        $res += $elem;
    }
    echo $res;
}
func($arr);
?>