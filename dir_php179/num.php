<?php
function countIterations($num) {
    $count = 0;
    while ($num >= 10) {
        $num = $num / 2;
        $count++;
    }
    return $count;
}

echo countIterations(100);
?>