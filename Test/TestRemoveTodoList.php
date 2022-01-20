<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Riza");
addTodoList("Billy");
addTodoList("eki");
addTodoList("arif");
showTodoList();

removeTodoList(1);
showTodoList();

$success = removeTodoList(4);
var_dump($success);
showTodoList();
