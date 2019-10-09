<?php declare(strict_types=1); // strict dibutuhkan

function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days");
// karena ketat diaktifkan dan "5 hari" bukan bilangan bulat, kesalahan akan terjadi
?>