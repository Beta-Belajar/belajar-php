<?php
//Array nerisikan kosong atau banyak data
//Array bisa berisikan jenis data yang berbeda
//Array memiliki panjang yang dinamis
//Array dimulai dari 0

$values = array(1, 2, 3, 4);
var_dump($values);

$names = ["Obet", "Jarkom", "Ibe", "Ra", "Ken"];
var_dump($names);

// $array[index] -> mengakses data array pada nomor index
// $array[index] = value -> mengubah data di arary pada nomor index
// $array[] = value -> menambah data di array pada posisi paling belakang
// unset($array[index]) -> menghapus data di array, index otomatis hilang dari array
// count($array) -> mengambil total dari array
var_dump($names[0]);
$names[0] = "Kobe";
var_dump($names);
unset($names[1]);
var_dump($names);
$names[] = "Obet";
var_dump($names);
var_dump(count($names));

// Array bisa dibuat MAP mengubah tipe data pemanggilan yang biasanya index yang dimulai dengan 0
// Tapi kita bisa menggunakan tipe data lain selain number
$lerry = array(
    "id" => "lerry",
    "name" => "Lerry Julian Joostensz",
    "age" => 25
);

var_dump($lerry);
var_dump($lerry["id"]);
var_dump($lerry["age"]);

// Array di dalam Array
$julian = array(
    "id" => "21/7",
    "name" => "Lerry Julian Joostensz",
    "age" => 25,
    "address" => [
        "city" => "Kupang",
        "country" => "Indonesia"
    ]
);
var_dump($julian);
