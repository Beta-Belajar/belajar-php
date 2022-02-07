<?php
$gender ="PRIA";

// if ($gender == "PRIA") {
//     $hi = "Hi Bro";
// } else {
//     $hi ="Hi Nona";
// }
//dengan ternary operator kita menggunakan ? dan : ? untuk kondisi pertama dan else untuk :

$hi = $gender == "PRIA" ? "Hi Bro" : "Hi Nona";

echo $hi . PHP_EOL;