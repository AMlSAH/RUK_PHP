<?php
$str = 'example..com';
if (strpos($str, '..') !== false) {
    echo 'Есть две точки подряд';
} else {
    echo 'Нет двух точек подряд';
}
?>