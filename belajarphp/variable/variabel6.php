<?php
function myTest() {
    $x = 5; // local scope(yaitu variabel yang di deklarasikan di dalam fungsi)
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// menggunakan x di dluar fungsi ini akan menghasilkan error,karena variabel x di deklarasikan di dalam fungsi atau local variabel/local scope
echo "<p>Variable x outside function is: $x</p>";
?>
