<?php

$num = 1;
$iterations = 0;

echo "Начальное число: $num<br>";

while ($num <= 1000) {
    $num *= 3;
    $iterations++;
    
    echo "Итерация $iterations: $num<br>";
}

echo "<br>Итоговое число: $num<br>";
echo "Количество итераций: $iterations";
?>