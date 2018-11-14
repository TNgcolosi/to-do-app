<?php 
function add_todo($todoitem, $duedate) {
    end($_SESSION['todo']);
    $key = key($_SESSION['todo']);
    $todoitem = $_POST['todo'];
    $duedate = $_POST['due_date'];
    $_SESSION['todo'][$key+1] = array($_POST['todo'], $_POST['due_date']);

}

function delete_task($key) {
       unset($_SESSION['todo'][$key]);
}

function edit_task($task) {
    $key = key($_SESSION['todo']);
    return  implode($_SESSION['todo'][$key]);
}

function update_task($todoitem, $duedate) {
    $key = key($_SESSION['todo']);
    unset($_SESSION['todo'][$key]);
    add_todo($todoitem, $duedate);
    
}

function sort_tasks($date1, $date2) {
    return strtotime($date1[1]) - strtotime($date2[1]);
}

function sort_by_date() {
    usort($_SESSION['todo'], 'sort_tasks');
}


?>