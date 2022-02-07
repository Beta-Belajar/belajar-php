<?php
//mengakses data menggunakan array sangat bertele-tele
//menggunakan foreach untuk mengakses array secara otomatis

$names = ["Lerry", "Julian", "Joostensz"];
//tanpa foreach
/*
for ($i = 0; $i < count($names); $i++){
    echo "Hello $names[$i] ". PHP_EOL;
}
*/
//dengan foreach
/*
foreach ($names as $name){
    echo "Hello $name" . PHP_EOL;
}
*/
//foreach dengan key

$person = [
    "first_name" => "Lerry",
    "middle_name" => "Julian",
    "last_name" => "Joostensz"
];

foreach ($person as $key => $value){
    echo "$key : $value". PHP_EOL;
}