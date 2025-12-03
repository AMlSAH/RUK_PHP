<?php
function ratio($arr1, $arr2) {
    $sum1 = 0;
    foreach ($arr1 as $elem) {
        $sum1 += $elem;
    }
    $sum2 = 0;
    foreach ($arr2 as $elem) {
        $sum2 += $elem;
    }
    if ($sum2 == 0) {
        return 0;
    }
    return $sum1 / $sum2;
}
?>