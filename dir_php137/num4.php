<?php
$str = 'abracadabra';
$chars = str_split($str);
$counts = array_count_values($chars);
print_r($counts);
?>