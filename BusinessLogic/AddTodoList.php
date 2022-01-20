<?php

/**
 * Menambah todo ke list
 */

function addTodoList(string $todo)
{
    global $todoList;

    // sizeof untuk menghitung jumlah elemen array
    // alias dari count()
    // + 1 untuk penomoran dimasuka ke key
    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}