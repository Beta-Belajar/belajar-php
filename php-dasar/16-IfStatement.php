<?php
// expression itu di dlm variable contoh $a = 10; maka expressionnya 10 satu baris keseluruhan itu statement 
// dan block adalah kumpulan statemen dalam {}
$nilai = 80;
$absen = 90;
/*
if ($nilai >= 75 && $absen >=75) {
    echo "Anda Lulus" . PHP_EOL;
} */
//else statement
/*
if ($nilai >=75 && $absen >= 75)
    echo "Anda Lulus" . PHP_EOL;
else
    echo "Anda Tidak Lulus". PHP_EOL; */
//else if statement bisa else if atau elseif
/*
if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A". PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B".PHP_EOL;
}elseif ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C".PHP_EOL;
} */

//syntax alternatif ganti dgn elseif dan {} dengan : dan akhiri dengan endif;
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A". PHP_EOL;
 elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B".PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai Anda C".PHP_EOL;
endif;