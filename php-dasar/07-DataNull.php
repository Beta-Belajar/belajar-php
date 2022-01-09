<?php
$name = "Lerry";
$name = NULL;


$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

//mengecek apakah data bernilai null atau tidak -> is_null($variable) -> nilai 1 berarti true dan 0 false
echo "Is Name Null? : ";
echo is_null($name);
echo "\n";

var_dump(is_null($name));

//menghapus varibale

$contoh = "Lerry";
// unset($contoh);
//menghapus variable dengan menegecek apakah nilainya ada atau tidak
echo $contoh;
var_dump(isset($contoh));
