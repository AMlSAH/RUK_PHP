<?php
$arr = [1, 3, 5, 7, 9];
$hasFive = false;
foreach ($arr as $value) {
    if ($value == 5) {
        $hasFive = true;
        break;
    }
}
echo $hasFive ? 'Есть' : 'Нет';
?>