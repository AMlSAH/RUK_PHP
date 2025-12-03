<?php
function root($num) {
    return pow($num, 1/3);
}

function norm($num) {
    return round($num, 3);
}

$result = norm(root(2));
echo $result;
?>