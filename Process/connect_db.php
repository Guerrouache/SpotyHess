<?php


try{

    $dsn = 'mysql:host=localhost;dbname=SpotyHess';
    
    $username = 'root';
    $password = ''; 
    
    $database = new PDO($dsn, $username, $password);
}

catch(Exception $message){

    echo "probleme <br>". $message;
}