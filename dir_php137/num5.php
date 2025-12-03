<?php
$str = 'The quick brown fox jumps over the lazy dog';
$words = explode(' ', $str);
$count = 0;
foreach ($words as $word) {
    if (strlen($word) > 3) {
        $count++;
    }
}
echo $count;
?>