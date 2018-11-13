<?php 
function add_todo($todoitem, $duedate) {
    end($_SESSION['todo']);
    $key = key($_SESSION['todo']);
    $todoitem = $_POST['todo'];
    $duedate = $_POST['due_date'];
    $_SESSION['todo'][$key+1] = array($_POST['todo'], $_POST['due_date']);

}


?>