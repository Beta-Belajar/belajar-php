<?php
//mengembalikan function value
function sum(int $first, int $second)
{
    $total = $first + $second;
    return $total;
}
$result = sum(10, 10);
var_dump($result);

function getFinalValue(int $value)
{
    if ($value >= 80) {
        return "A";
    } else if ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
    echo "Upds" . PHP_EOL;
}
$score = getFinalValue(90);
var_dump($score);
$score = getFinalValue(30);
var_dump($score);
// Return Type Declarations
/*
Sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanya
Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
Untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan : diikuti tipe data kembaliannya
*/
function sum1(int $first1, int $second1): int
{
    $total1 = $first1 + $second1;
    return $total1;
}
$result = sum(10, 10);
var_dump($result);
