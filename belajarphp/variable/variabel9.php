<?php
function myTest() {
    //kata kunci static digunakan untuk
    static $x =0;
    echo $x;
    $x++; //value dari variabel x akan bertambah berurutan ke samping
}

myTest();
myTest();
myTest();
myTest();
?>