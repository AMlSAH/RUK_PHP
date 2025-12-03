<?php
$str = 'https://example.com';
if (substr($str, 0, 7) == 'http://' || substr($str, 0, 8) == 'https://') {
    echo 'Начинается с http:// или https://';
}
?>