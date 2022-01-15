<?php
//Operator        Nama                            Keterangan
//$a == $b        Sama dengan                     true jika $a sama dengan $b setelah dilakukan konversi tipe data
//$a === $b       Identik                         true jika $a sama dengan $b dan memiliki tipe data yang sama
//$a != $b        Tidak sama dengan               true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
//$a <> $b        Tidak sama dengan               true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data

//$a !== $b      Tidak identik                    true jika $a tidak sama dengan $b atau tidak sama tipe data
//$a < $b        Kurang dari                      true jika $a kurang dari $b
//$a <= $b       Kurang dari atau sama dengan     true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
//$a > $b        Lebih dari                       true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
//$a >= $b       Lebih dari sama dengan           true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data


var_dump("10" == 10);
var_dump("10" === 10);

var_dump(10 < 9);
var_dump(9 > 9);
