<?php

$mahasiswa = [
    [
    "nama" => "Muhammad Sulthon Mufti",
    "nim" => "2100018213",
    "email" => "muhammad2100018213@webmail.uad.ac.id"
    ],
    [
        "nama" => "Mufti",
        "nim" => "2100018213",
        "email" => "muhammad2100018213@webmail.uad.ac.id"
    ]
];



$data = json_encode($mahasiswa); //mengubah array menjadi json
echo $data;

?>