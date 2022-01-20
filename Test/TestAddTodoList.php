<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Riza");
addTodoList("Billy");

var_dump($todoList);