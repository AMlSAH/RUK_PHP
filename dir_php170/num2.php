<?php
function checkSign($num) {
    if ($num > 0) {
        echo '+++';
    } elseif ($num < 0) {
        echo '---';
    } else {
        echo 'Число равно нулю';
    }
}

checkSign(5);
checkSign(-3);
checkSign(0);
?>