<?php
function getSum($arr) {
    $res = 0;
    foreach ($arr as $elem) {
        $res += $elem;
    }
    return $res;
}
?>