<?php
include 'functions.php';
dump($_POST);
$todoDelete = $_POST['todo-task'];
$json = file_get_contents('todo.json');
$todos = json_decode($json, true);
if ($todoDelete && $todos[$todoDelete])
{
    unset($todos[$todoDelete]);
    file_put_contents('todo.json', json_encode($todos, JSON_PRETTY_PRINT));
    header('location: index.php');
}else
{
    header ('location: index.php?error=delete');
}
