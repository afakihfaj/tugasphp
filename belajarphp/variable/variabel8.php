<?php
/* php juga menyimpan semua varaibel global dalam bentuk array dengan command $GLOBALS[index] index
    Array ini juga dapat diakses dari dalam fungsi dan dapat digunakan untuk mempebarui global secara langsung
*/
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; //menambah value dari variabel x dan y
}

myTest();
echo $y; // outputnya 15
?>