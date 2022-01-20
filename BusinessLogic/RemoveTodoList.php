<?php
/** 
 * Remove todo list
*/

function removeTodoList(int $number) : bool
{
    global $todoList;
    // global $todoList;

    // if ($number > sizeof($todoList)) {
    //     return false;
    // }

    // for ($i = $number; $i < sizeof($todoList); $i++) {
    //     $todoList[$i] = $todoList[$i + 1];
    // }

    // unset($todoList[sizeof($todoList)]);
    // return true;

    if($number > sizeof($todoList))
    {
        return false;
    }

    for ($i=$number; $i < sizeof($todoList); $i++) { 
        // reset array dan memasukan data dengan array + 1 atau setelahnya
        $todoList[$i] = $todoList[$i + 1];
    }

    // remove data array terakhir
    unset($todoList[sizeof($todoList)]);
    return true;
}