<?php
//objek adalah tipe data yang menyimpan data dan informasi tentang cara mengolah data tersebut
Class Car{
    function Car(){
        $this->model="VW";
    }
}

// membuat sebuah object
$herbie = new Car();

// menunjukkan properti objek
echo $herbie->model;

?>