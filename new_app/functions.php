<?php 

function add_todo($tasks) {
    end($_SESSION['todoTask']);
    $key = key($_SESSION['todoTask']);
    $_SESSION['todoTask'][$key + 1]= $tasks;
}

function delete($tasks) {
    unset($_SESSION['todoTask'][$tasks]);
}


?>