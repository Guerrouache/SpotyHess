<?php 
require_once('./connect_db.php'); 
session_start();



var_dump($_FILES['image']);
if (
    isset($_POST['title']) && !empty($_POST['title'])&&
    isset($_POST['chanteur']) && !empty($_POST['chanteur'])&&
    isset($_FILES['image']) && !empty($_FILES['image'])&&
    isset($_FILES['audio']) && !empty($_FILES['audio'])
    ) {

        $title = $_POST['title'];
        $request = $database->query("SELECT id FROM musique WHERE title = '$title' ");
        $titleexist = $request->fetch();


      if ($titleexist) {
        
      } else {
       $request = $database->prepare("INSERT INTO musique (title, chanteur, `image`, audio) VALUES (:title :chanteur :`image` :audio)");
       $resultat = $request->execute([
           'title' => $_POST['title'],
           'chanteur' => $_POST['chanteur'],
           'image' => $_FILES['image'],
           'audio' => $_FILES['audio']
        ]);        

      }

      header("Location: ../../index.php");   
        
    }
    
    

?>