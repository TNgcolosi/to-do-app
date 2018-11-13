<?php 
function add_todo($todoitem, $duedate) {
    $todoitem = $_POST['todo'];
    $duedate = $_POST['due_date'];
    $_SESSION['todo'] = array(array($_POST['todo'], $_POST['due_date']));

}


?>