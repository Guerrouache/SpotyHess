<?php 
require_once('./connect_db.php'); 
session_start();


if (
    isset($_POST['pseudo']) && !empty($_POST['pseudo']) &&
    isset($_POST['commentaire']) && !empty($_POST['commentaire'])) 
    
    
    {
        $idUser = $_SESSION['id_user'];
        
        $request = $database->query("INSERT INTO commentaire VALUES ('id_user, `Text`, 'id_musique') ");
        $idexist = $request->execute([
            'id_user' => $_SESSION['id_user'],
            `Text` => $_POST['commentaire'],
            'id_musique' => $_GET['id']
                ]);    

        




    }




?>