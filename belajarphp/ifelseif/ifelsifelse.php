<?php
//if elseif else statement mengeksekusi kode yang berbeda serta lebih dari 2 kondisi
$t = date("H");

if($t<"10"){
    echo"Have a good DAY!";
}elseif ($t<"20") {
   echo"Have a good Morning!"; 
}else {
    echo"Have a good night!";
}
?>