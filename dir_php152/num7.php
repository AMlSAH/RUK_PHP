<?php
$arr = ['img12.png', 'img10.png', 'img2.png', 'img1.png'];
natsort($arr);
$arr = array_values($arr);
print_r($arr);
?>