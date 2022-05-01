<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Lerry");
addTodoList("Julian");
addTodoList("Joostensz");
addTodoList("Mafia");
addTodoList("Detriana");
addTodoList("Lusi");


showTodoList();
removeTodoList(4);
showTodoList();

$success = removeTodoList(6);
var_dump($success);
