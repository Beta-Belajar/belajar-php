<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";


addTodoList('Lerry');
addTodoList('Julian');
addTodoList('Joostensz');


var_dump($todoList);
