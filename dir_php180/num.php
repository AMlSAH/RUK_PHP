<?php
function func($num1, $num2) {
    return ($num1 > 0 && $num2 > 0) ? $num1 * $num2 : $num1 - $num2;
}

echo func(3, 4);
?>