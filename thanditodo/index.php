<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Thanditodo</title>
</head>
<body>
<?php require('functions.php'); ?>

<?php   (isset($_POST['add_todo'])) ? add_todo($_POST['todo'], $_POST['due_date']) : " "; ?>

<?php   (isset($_POST['deletebtn'])) ? delete_task($_POST['deletebtn'])  : " "; ?>

<?php   (isset($_POST['editbtn'])) ? edit_task($_SESSION['todo']) : " ";?>

<?php   (isset($_POST['update'])) ? update_task($_POST['todo'], $_POST['due_date']) : " " ;?>

<?php   (isset($_POST['sort_date'])) ? sort_by_date() : " "; ?>

<div class="container card">
    <h1 class="text-center"> Just Do It </h1>
        <form method="post" action="">
        <?php if(!empty($_SESSION['todo'])) :  ?>
            <ul class="list-group">
            <?php foreach($_SESSION['todo'] as $key => $task) : ?>
                <li class="list-group-item"><?php echo $task[0]; ?>
                <button type="submit" name="deletebtn" value="<?php echo $key; ?>"class="btn btn-outline-danger float-right">Delete</button>
                <button type="submit" name="editbtn" value="<?php echo $key; ?>" class="btn btn-outline-info float-right">Edit</button>
                <span class="badge badge-light float-right"><?php echo $task[1]; ?></span>
                </li>
            <?php endforeach; ?>    
            </ul>
            <?php endif; ?>
            <label for="todo" class="badge badge-secondary"> Add To Do Item</label>
            <input type="text" name="todo" value="<?php if(isset($_POST['editbtn'])) : echo substr(edit_task($_SESSION['todo']), 0, -10); endif; ?>" class="form-control" placeholder="Add to do item here...">
            <label for="due_date" class="badge badge-secondary">Due Date</label>
            <input type="date" name="due_date" value="due_date" class="form-control">
            <button type="submit" class="btn btn-secondary" name="add_todo" value="add_todo"> Add To Do</button>
            <button type="submit" class="btn btn-secondary" name="update" value="update"> Update</button>
            <button type="submit" class="btn btn-secondary" name="sort_date" value="sort_date"> Sort by Date </button>
            

        </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>