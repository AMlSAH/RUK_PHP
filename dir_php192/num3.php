<?php
$num = 1;

function func() {
    global $num;
    return $num;
}

echo func();
?>