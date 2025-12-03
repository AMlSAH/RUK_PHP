<?php
$str = 'admin@example.com';
if (str_contains($str, '@') && str_ends_with($str, '.com')) {
    echo 'Содержит @ и заканчивается на .com';
} else {
    echo 'Не соответствует условиям';
}
?>