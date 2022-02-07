<?php
//menghentikan break dan melanjutkan perulangan dengan continue
//$counter = 1;
/*
while (true){
    echo "Hello Break : " . $counter . PHP_EOL;
    $counter++;
    if ($counter > 10){
        break;
    } 
} 
*/
//continue
for ($counter = 0; $counter <=100; $counter++){
    if ($counter %2 == 0){ //jika module di bagi 2 = 0 maka skip
        continue;
    }
    echo "Hello Continue " . $counter . PHP_EOL;
}