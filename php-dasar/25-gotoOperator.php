<?php
//untuk loncat ke program lain
//harus ada label
/*
goto a;
b:
echo "Hello World" . PHP_EOL;


a:
echo "Hello A" . PHP_EOL;
goto b;
*/
//goto operator di loop
$counter = 1;
while (true){
    echo "While Loop $counter" .PHP_EOL;
    $counter++;
    if ($counter > 10){
        goto end;
    }
}

end:
echo "End Loop";