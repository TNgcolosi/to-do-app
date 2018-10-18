<?php 

function add_the_things($tasks) {
    end($_SESSION['todoTask']);
    $key = key($_SESSION['todoTask']);
    $_SESSION['todoTask'][$key + 1]= $tasks;
}



?>