<?php

$name = "Lerry Julian";

echo "Name : ". $name. PHP_EOL;// PHP EOL end of line untuk enter

//konversi ke number
$valueString = (string) 100;
var_dump($valueString);

//konversi string ke integer
$valueInt = (int) "100";
var_dump($valueInt);

//Mengakses karakter
//mengambil karakter
$name = "Lerry";
echo $name[0]. PHP_EOL;
echo $name[1]. PHP_EOL;
echo $name[2]. PHP_EOL;
//Variable Parsing
echo "Hello $name, Selamat Belajar PHP". PHP_EOL;
//Curly Brace
echo "Hello {$name}J". PHP_EOL;
