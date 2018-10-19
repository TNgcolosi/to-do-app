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
    delete($tasks);
    ?> 
    <div class="form-group">
    
    <label for="todoTask">Add to list</label>
    
    <input type="text" class="form-control" name="todoTask" placeholder="Send adoption forms...">
    </div>
    
    <button type="submit" name="submit" class="btn btn-outline-primary" value="submit" >Make the things</button>
    
    </div>
<?php }

?>