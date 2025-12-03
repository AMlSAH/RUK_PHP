<?php
function getDivisors($num) {
    $divisors = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $divisors[] = $i;
        }
    }
    return $divisors;
}
print_r(getDivisors(12));
?>