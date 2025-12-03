<?php
$num = 1;

function func(&$num) {
    $num++;
}

func($num);
echo $num;
?>