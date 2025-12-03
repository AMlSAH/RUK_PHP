<?php
$arr = [1, 2, 3, 4, 5];
foreach ($arr as &$value) {
    $value = $value * $value;
}
unset($value);
print_r($arr);
?>