<?php
include 'functions.php';
$todos = [];
CONST SPACE = 'Your To Do must contains character';
if (file_exists('todo.json'))
{
    $json = file_get_contents('todo.json');
    $todos = json_decode($json, true);
}
?>
<div class="container">
    <form action="newtodo.php" method="post" id = "addTask" class="row align-items-end">
            <div class="input-group mb-3">
                <input type="text" name="todo-task" class="form-control" value="" placeholder="<?php echo isset($_GET['error']) ? SPACE : 'Add Task'; ?>" >
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submit</button>
            </div>
    </form>
    <div class="row justify-content-around">
        <?php foreach($todos as $todoName => $todo) :?>
        <div class="card text-center col-md-4 px-0">
            <div class="card-header">
                <?php echo $todoName;  ?>
            </div>
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer text-body-secondary">
                <form action="update.php" method="post">
                    <input name="completed" type="checkbox" class="mx-2" value="<?php echo $todo['completed'] ?: 0; ?>" <?php echo $todo['completed'] ? 'checked': ''; ?>><?php echo $todo['completed'] ? 'Completed' : 'Uncompleted';?>
                    <input type="hidden" name="todo-task" value="<?php echo sanitizeAndTrim($todoName) ?? ''; ?>">
                </form>
                <form action="delete.php" method="post">
                    <input type="hidden" name="todo-task" value="<?php echo sanitizeAndTrim($todoName); ?>">
                    <button type="submit" class="btn btn-outline-dark">Delete</button>
                </form>

            </div>
        </div>
        <?php endforeach ?>
    </div>

</div>