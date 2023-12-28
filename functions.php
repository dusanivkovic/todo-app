<?php
function dump ($par)
{
    echo '<pre>';
    var_dump($par);
    echo '</pre>';
}
function sanitizeAndTrim ($input) 
{
    $userInput = htmlspecialchars($input, ENT_QUOTES);
    
    return trim($userInput);
}