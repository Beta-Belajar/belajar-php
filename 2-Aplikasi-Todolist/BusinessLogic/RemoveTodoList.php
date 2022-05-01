<?php

/*
* Menghapus todolist
*/

function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);
    return true;


    //1.Lerry
    //2.Julian
    //3.Joostensz

    // 1.Lerry
    // 2. Julian [2+1]
    // 3. Joostensz[3+1]




}
