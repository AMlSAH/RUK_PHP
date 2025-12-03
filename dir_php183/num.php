<?php
function average($arr) {
    if (empty($arr)) {
        return 0;
    }
    $res = 0;
    foreach ($arr as $elem) {
        $res += $elem;
    }
    return $res / count($arr);
}
?>