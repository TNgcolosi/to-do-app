<?php 
function add_todo($todoitem, $duedate) {
    end($_SESSION['todo']);
    $key = key($_SESSION['todo']);
    $todoitem = $_POST['todo'];
    $duedate = $_POST['due_date'];
    $_SESSION['todo'][$key+1] = array($_POST['todo'], $_POST['due_date']);

}

function delete_task($task) {
    $key = key($_SESSION['todo']);
    unset($_SESSION['todo'][$key]);
}

function edit_task($task) {
    $key = key($_SESSION['todo']);
    return $_SESSION['todo'][$key][0];
}

function update_task($todoitem, $duedate) {
    $key = key($_SESSION['todo']);
    unset($_SESSION['todo'][$key]);
    add_todo($todoitem, $duedate);
    
}

?>