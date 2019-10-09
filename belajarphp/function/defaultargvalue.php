<?php declare(strict_types=1); // strict ditbutuhkan
function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // digunakan sebagai default 50
setHeight(135);
setHeight(80);
?>