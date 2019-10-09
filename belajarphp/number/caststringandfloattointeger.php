<?php
//kadang,kita membutuhkan melemparkan nilai numerik ke dalam tipe data yang lain.
// melempar nilai float ke int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// melempar nilai string ke int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>