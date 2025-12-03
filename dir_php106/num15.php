<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$keys = [];
$values = [];
foreach ($arr as $key => $value) {
    $keys[] = $key;
    $values[] = $value;
}
print_r($keys);
print_r($values);
?>