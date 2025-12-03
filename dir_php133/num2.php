<?php
$word = 'madam';
$wordLower = strtolower($word);
if ($wordLower == strrev($wordLower)) {
    echo "$word - палиндром";
} else {
    echo "$word - не палиндром";
}
?>