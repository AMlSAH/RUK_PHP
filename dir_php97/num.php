<?php
$arr = [2, 4, 6, 0, 8, 10];
foreach ($arr as $value) {
    if ($value == 0) {
        break;
    }
    echo $value . " ";
}
?>