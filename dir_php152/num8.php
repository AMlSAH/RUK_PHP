<?php
$arr = ['IMG12.png', 'img10.png', 'img2.png', 'IMG1.png'];
natcasesort($arr);
$arr = array_values($arr);
print_r($arr);
?>