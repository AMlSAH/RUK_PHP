<?php
function getCommonDivisors($a, $b) {
    $common = [];
    $min = min($a, $b);
    for ($i = 1; $i <= $min; $i++) {
        if ($a % $i == 0 && $b % $i == 0) {
            $common[] = $i;
        }
    }
    return $common;
}
print_r(getCommonDivisors(12, 18));
?>