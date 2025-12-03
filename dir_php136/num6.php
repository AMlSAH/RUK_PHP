<?php
$letter = 'A';
$code = ord($letter);
if ($code >= 65 && $code <= 90) {
    echo "$letter - большая буква";
} elseif ($code >= 97 && $code <= 122) {
    echo "$letter - маленькая буква";
} else {
    echo "$letter - не английская буква";
}
?>