<?php
/*
for (init statement;kondisi;post statement){
    //blok perulangan
}

*/
// for tanpa kondisi diulangi terus menerus
/*
for (; ; ){
    echo "Hello For Loop" . PHP_EOL;
    }
*/    
//perulangan dengan kondisi
/*
for (; $counter <= 10;) { 
    echo "Ini adalh for loop ke-$counter" . PHP_EOL;
    $counter++;
}
*/
//dengan init statement
/*
for ($counter1 = 1; $counter1 <= 10;) { 
    echo "Ini adalh for loop ke-$counter1" . PHP_EOL;
    $counter1++;
}
*/
//dengan post statement
for ($counter1 = 1; $counter1 <= 10;$counter1++) { 
    echo "Ini adalh for loop ke-$counter1" . PHP_EOL;
    
}
