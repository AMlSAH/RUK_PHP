<?php
function sum($arr) {
    $sum = 0;
    foreach ($arr as $elem) {
        $sum += $elem;
    }
    return $sum;
}
$res = sum([1, 2, 3, 4, 5]);
echo $res;
?>