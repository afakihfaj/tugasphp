<?php
$x = 5; // global scope(yaitu variabel yang di deklarasikan di luar fungsi)

function myTest() {
    // menggunakan x  di dalam fungsi ini akan  menghasilkan kesalahan,karena variabel x di deklarasikan di luar fungsi
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>