<?php
include 'functions.php';
$json = file_get_contents('todo.json');
$todos = json_decode($json, true);
$todoTask = $_POST['todo-task'];
if ($todoTask && $todos[$todoTask]) 
{
    $todos[$todoTask]['completed'] = !$todos[$todoTask]['completed'];
    file_put_contents('todo.json', json_encode($todos, JSON_PRETTY_PRINT));
    header ('location: index.php');
}else
{
    header ('location: index.php?error=entry');
}
