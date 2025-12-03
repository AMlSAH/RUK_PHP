<?php
$arr = [1, 5, 10, 15, -5, 0, 9];
foreach ($arr as $value) {
    if ($value > 0 && $value < 10) {
        echo $value . "\n";
    }
}
?>