<?php 
require_once('./connect_db.php'); 
session_start();



if (
    isset($_POST['username']) && !empty($_POST['username'])) {

        $username = $_POST['username'];
        $request = $database->query("SELECT id FROM user WHERE username = '$username' ");
        $pseudoexist = $request->fetch();


      if ($pseudoexist) {
        $iduser = $pseudoexist['id'];
        
      } else {
       $request = $database->prepare("INSERT INTO user (username) VALUES (:username)");
       $resultat = $request->execute([
           'username' => $_POST['username'],   
        ]);
        $iduser = $database->lastInsertId();

      }
         $_SESSION['username']= $username;
         $_SESSION['id_user']=$iduser;
         

      header("Location: ../../partials/bibliotheque.php");      
    }
    

?>