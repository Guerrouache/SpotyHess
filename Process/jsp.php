<?php 
require_once('./connect_db.php'); 






$request=$database->query('SELECT * FROM musique');
$sons=$request->fetchAll();

var_dump($sons);
















?>