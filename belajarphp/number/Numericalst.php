<?php
//php is_numeric() dapat digunakan untuk menemukan apakah suatu variabel numerik.
$x = 5985;
var_dump(is_numeric($x));

$x="5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;

$x="Hello";
var_dump(is_numeric($x));
?>