<?php
$favcolor="red";

switch ($favcolor) {//switch statement digunakan untuk melakukan tindakan yang berbeda berdasarkan kondisi yang berbeda juga
    //switch biasanya digunakan untuk memilih salah satu dari banyak blok kode yang akan dieksekusi.
    case "red":
        echo"Your Favorite color is red!";
        break;
    case "blue":
        echo"Your favorite color is blue";
        break;
    case "green":
        echo"Your favorite color is green";
        break;
       default;
        echo "Your favorite color is neither red, blue, nor green!";
}

?>