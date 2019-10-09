<?php
function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days");
// mulai strict tidak dinyalakan "5 days" dan berganti ke int(5), dan dikembalikan 10
?>