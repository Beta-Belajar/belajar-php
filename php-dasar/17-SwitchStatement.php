<?php
//Switch sama seperti if namun hanya mendukung ==
$nilai = "B";
switch ($nilai) {
    case "A":
        echo "Anda Lulus dengan sangat baik". PHP_EOL;
        break;
    case "B":
        echo "Anda Lulus". PHP_EOL;
        break;
    case "C":
        echo "Anda Lulus dengan Nilai Standar". PHP_EOL;
        break;
    default:
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
}