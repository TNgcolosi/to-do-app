<?php 

function add_the_things($tasks) {
    end($_SESSION['todoTask']);
    $key = key($_SESSION['todoTask']);
    $_SESSION['todoTask'][$key + 1]= $tasks;
}

function delete($tasks) {
    unset($_SESSION['todoTask'][$tasks]);
}

function edit($tasks) {
    unset($_SESSION['edit']);
}

function resubmit($tasks) {
     end($_POST['saveChanges']);
    // $key = key($_SESSION['saveChanges']);
    $key = key($_SESSION['todoTask']);
    array_push($_SESSION['todoTask'], $_POST['saveChanges']);
    
}


?>