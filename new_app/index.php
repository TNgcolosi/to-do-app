<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make The Pots</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <?php require('functions.php'); ?>
   
   <?php 
   if(isset($_POST['submit'])) {
        add_the_things($_POST['todoTask']);
    }
    
    if(isset($_POST['delete'])) {
        delete($_POST['delete']);
    }

    if(isset($_POST['edit'])) {
        delete($_POST['edit']);?>
        <div class="container">
        <form action="" method="post">
        <div class="form-group">
    
        <label for="todoTask">Add to list</label>
    
        <input type="text" class="form-control" name="todoTask" value="<?php echo $key ?>">
        </div>
    
        <button type="submit" name="resubmit" class="btn btn-outline-primary" value="resubmit" >Make the things</button>
        </div>
         </div>
   <?php }

   if(isset($_POST['resubmit'])) {
        resubmit($_POST['resubmit']);
   }

    ?>

    

    
    <div class="container">
    <h1 class="text-center" >The app that will make the pots to be done</h1>
    <form action="" method="post">
    <?php if(!empty($_SESSION['todoTask'])) : ?>
    <!-- <div class="form-group"> -->
    <ul class="list-group"> 
    <?php foreach ($_SESSION['todoTask'] as $key => $tasks) : ?> 
    

    <li class="list-group-item list-group-item-dark"><?php echo $tasks; ?>
    
    <div class="float-right">
    <button type="submit" name="delete" value="<?php echo $key ?>"class="btn btn-outline-danger">Delete</button>
    <button type="submit" name="edit" value="<?php echo $key ?>" class="btn btn-outline-light">Edit</button>
    
    </div><br></li>
    

    <?php endforeach; ?> 
    </ul>
    <?php endif; ?>
    
    <div class="form-group">
    
    <label for="todoTask">Add to list</label>
    
    <input type="text" class="form-control" name="todoTask" placeholder="Send adoption forms...">
    </div>
    
    <button type="submit" name="submit" class="btn btn-outline-primary" value="submit" >Make the things</button>
    
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>