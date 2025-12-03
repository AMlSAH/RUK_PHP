<?php
$num = 1;

function func() {
    global $num;
    $num++;
    return $num;
}

echo func();
?>