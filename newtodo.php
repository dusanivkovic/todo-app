<?php 
include 'functions.php';
$taskTodo =  sanitizeAndTrim($_POST['todo-task'])?? false;

if ($taskTodo)
{
    if (file_exists('todo.json'))
    {
        $json = file_get_contents('todo.json');
        $jsonArray = json_decode($json, true);
        $jsonArray[$taskTodo] = ['completed' => false];
        dump($jsonArray);
    }else
    {
        $jsonArray = [];
    }
    file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));

    header('location: index.php');
}