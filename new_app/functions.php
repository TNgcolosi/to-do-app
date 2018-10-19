<?php 

function add_the_things($tasks) {
    end($_SESSION['todoTask']);
    $key = key($_SESSION['todoTask']);
    $_SESSION['todoTask'][$key + 1]= $tasks;
}

function delete($tasks) {
    unset($_SESSION['todoTask'][$tasks]);
}



function resubmit($tasks) {
    end($_SESSION['saveChanges']);
    $key = key($_SESSION['saveChanges']);
    $_SESSION['saveChanges'][$key + 1]= $tasks;
    
}


?>