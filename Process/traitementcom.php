<?php 
require_once('./connect_db.php'); 
session_start();


if (
    isset($_POST['pseudo']) && !empty($_POST['pseudo']) &&
    isset($_POST['commentaire']) && !empty($_POST['commentaire'])&&
    isset($_GET['id_musique']) && !empty($_GET['id_musique'])) 
    
    {
        $idUser = $_POST['pseudo'];
        $musiqueID = $_GET['id_musique'];

        $request = $database->prepare("INSERT INTO commentaire (com, id_user, id_musique) VALUES (':com', ':id_user', ':id_musique')  ");
        $idexist = $request->execute([
            'id_user' => $_SESSION['id_user'],
            `com` => $_POST['commentaire'],
            'id_musique' => $musiqueID
                ]);    

        



    }

var_dump($_GET['id_musique']);

die();



?>