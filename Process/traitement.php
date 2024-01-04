<?php 
require_once('./connect_db.php'); 
session_start();



if (
    isset($_POST['username']) && !empty($_POST['username'])) {

        $username = $_POST['username'];
        $request = $database->query("SELECT id FROM user WHERE username = '$username' ");
        $pseudoexist = $request->fetch();


      if ($pseudoexist) {
        
      } else {
       $request = $database->prepare("INSERT INTO user (username) VALUES (:username)");
       $resultat = $request->execute([
           'username' => $_POST['username'],
        ]);

      }
         $_SESSION['username']= $username;

      header("Location: ../../index.php");      
    }
    

?>