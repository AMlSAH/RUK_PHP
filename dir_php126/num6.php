<?php
$str = 'photo.jpg';
if (substr($str, -4) == '.png' || substr($str, -4) == '.jpg') {
    echo 'Заканчивается на .png или .jpg';
}
?>