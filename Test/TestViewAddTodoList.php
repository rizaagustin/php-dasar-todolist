<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Riza");
addTodoList("Agustin");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();