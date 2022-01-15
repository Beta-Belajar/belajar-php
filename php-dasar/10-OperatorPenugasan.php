<?php
// Penugasan               Keterangan
// $a += $b                $a = $a + b
// $a -= $b                $a = $a - b
// $a *= $b                $a = $a * b
// $a /= $b                $a = $a / b
// $a %= $b                $a = $a % b

$total = 0;

$fruit = 1000;
$chicken = 35000;
$orangeJuice = 1000;

$total += $fruit;
$total += $orangeJuice;
$total += $chicken;

var_dump($total);
