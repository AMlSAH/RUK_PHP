<?php
function isLeapYear($year) {
    return (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0));
}
var_dump(isLeapYear(2024));
var_dump(isLeapYear(2023));
?>