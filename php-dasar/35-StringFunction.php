<?php
/*
Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi data string.
Sebenarnya banyak sekali function bawaan PHP yang bisa kita gunakan untuk memanipulasi string
https://www.php.net/manual/en/ref.strings.php 
*/
/*
Function                Keterangan
join() / implode()      Menggabungkan array menjadi string
explode()               Memecah string menjadi array
strtolower()            Mengubah string menjadi lowercase
strtoupper()            Mengubah string menjadi uppercase
substr()                Mengambil sebagian string
trim()                  Menghapus whitespace di depan dan belakang string
*/
//String function
var_dump(join(",", [1, 2, 3, 4, 5]));
var_dump(explode(" ", "Lerry Julian Joostensz"));
var_dump(strtolower("LERRY JULIAN JOOSTENSZ"));
var_dump(strtoupper("lerry julian joostensz"));
var_dump(trim("               lerry               "));
var_dump(substr("Lerry Julian Joostensz", 0, 3));
