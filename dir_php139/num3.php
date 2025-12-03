<?php
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$position = array_search('-', $arr);
if ($position !== false) {
    array_splice($arr, $position, 1);
}
print_r($arr);
?>