<?php


//Contoh Nama Keterangan
// $a + $b	Union	Menggabungkan array $a dan $b
// $a == $b	Equality	true jika $a dan $b memiliki key-value sama
// $a === $b	Identity	true jika $a dan $b memiliki key-value sama dan posisi sama
// $a != $b	Inequality	true jika $a dan $b tidak sama
// $a <> $b	Inequality	true jika $a dan $b tidak sama
// $a !== $b	Nonidentity	true jika $a dan $b tidak identik
$first = [
    "first_name" => "Lerry"
];
$last = [
    
    "first_name" => "Julian",
    "last_name" => "Joostensz"
];
$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Lerry",
    "last" => "Joos"
];
$b = [
    "last" => "Joos",
    "first_name" => "Lerry"
];
var_dump($a == $b);
var_dump($a === $b);