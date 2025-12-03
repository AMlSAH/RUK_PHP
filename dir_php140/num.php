<?php
$arr = [1, 2, 3, 4, 5];
$first = array_shift($arr);
$last = array_pop($arr);
echo "Первый элемент: $first\n";
echo "Последний элемент: $last\n";
echo "Исходный массив после удаления: ";
print_r($arr);
?>