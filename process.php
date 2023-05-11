<?php
$file = "myData.json";
$array = array();
//ambil file
$ambilData = file_get_contents($file);
$decodeData = json_decode($ambilData,true);

$data = array (
    "nama" => $_POST ['nama'],
    "email" => $_POST ['email'],
    "alamat" => $_POST ['alamat'],
    "gender" => $_POST ['gender'],
    "program" => $_POST ['program'],
    "tahun" => $_POST ['tahun']
);

//menggabungkan array
array_push($decodeData,$data);
$json = json_encode($decodeData,JSON_PRETTY_PRINT);
file_put_contents($file,$json);
?>