<?php
$str = 'image.png';
if (str_ends_with($str, '.png') || str_ends_with($str, '.jpg')) {
    echo 'Заканчивается на .png или .jpg';
} else {
    echo 'Не заканчивается на .png или .jpg';
}
?>