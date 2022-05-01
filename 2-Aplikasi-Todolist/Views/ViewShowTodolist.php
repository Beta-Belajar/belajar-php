<?php
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../Helper/Input.php";
require_once "../Views/ViewAddTodolist.php";
require_once "../Views/ViewRemoveTodolist.php";
require_once "../Model/TodoList.php";


function viewShowTodolist()
{
    while (true) {
        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih : ");

        if ($pilihan == "1") {
            viewAddTodolist();
        } elseif ($pilihan == "2") {
            viewRemoveTodolist();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan Tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
}
