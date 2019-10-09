<?php
$x = 5;
$y = 10;
/* kata kunci global digunakan untuk mengakses variabel global dari dalam fungsi
    kata kunci global digunakan sebelum variabel(di dalan fungsi)
*/
function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputnya 15
?>