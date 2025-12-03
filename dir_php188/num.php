<?php
$arr = [1, 2, 3, 4, 5];

foreach ($arr as &$elem) {
    $elem = sqrt($elem);
}
unset($elem);

var_dump($arr); 
?>