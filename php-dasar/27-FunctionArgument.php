<?php
// argument atau parameter sama seperti membuat variable
// argument ditempatkan di dalam kurung () di deklarasi function
// argument bisa lebih dari satu, jika lebih dari satu maka dipisah dengan tanda koma
/*
function sayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Lerry");
sayHello("Julian");
*/
// default argument value
/*
function sayHello($name = "Anonim")
{
    echo "Hello $name" . PHP_EOL;
}

sayHello();
sayHello("Julian");
*\
/*
Valid Type
Type	Keterangan
Class / Interface	Parameter harus tipe Class / Interface
self	Parameter harus sama dengan Class dimana function ini dibuat
array	Parameter harus array
callable	Parameter harus callable
bool	Parameter harus boolean 
float	Parameter harus floating point
int	Parameter harus integer number
string	Parameter harus string
interable	Parameter harus array atau tipe Traversable
object	Parameter harus sebuah object

*/
/*
function sum(int $first, int $last){
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

//sum("100", "100");
sum(100, 100);
//sum(true, false);

sum([],[]);//erorr
*/
/*
Variable-length Argument List
Variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
Variable-length argument list secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke functionnya
Variable-length argument list hanya bisa dilakukan di argument posisi terakhir
Untuk membuat variable-length argument list, kita bisa menggunakan tanda … (titik tiga kali) sebelum nama argument
*/
//kode variable-length argument list
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL; //impode array menjadi string dengan tanda koma yg di deklarasi
}
/*
sumAll(10, 20, 30, 40);
sumAll(...[10, 20, 30, 40]);
*/
// jika sudah ada array
$values = [1, 2, 3, 4, 5, 6, 7, 8, 9];

sumAll(...$values);
