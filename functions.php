<?php 

function add_the_things($tasks) {
$key = key($_SESSION['todoTask']);
$_SESSION['todoTask']['task'] = $tasks;
}



?>