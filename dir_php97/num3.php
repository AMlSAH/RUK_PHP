<?php
$arr = [1, 2, 3, 4, 5, 3, 6];
foreach ($arr as $index => $value) {
    if ($value == 3) {
        echo $index;
        break;
    }
}
?>