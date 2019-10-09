<?php
//elemen elemen dalam array dapat diurutkan dalam abjad atau numerik order,turun atau naik
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>
