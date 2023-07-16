<?php

$data = file_get_contents('coba.json'); //mengambil data dari coba.json pada folder yang sama
$mahasiswa = json_decode($data, true); //dari json menjadi array, kalau hanay $data berubah menjadi objek, kalau tambah true jad array

var_dump($mahasiswa);
echo $mahasiswa[0]["pembimbing"]["pembimbing1"]; //mencari data pada coba.json (mencari key pembimbing dan cari pembimbing1)


?>