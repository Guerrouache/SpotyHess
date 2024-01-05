<?php 
require_once('./connect_db.php'); 
session_start();



var_dump($_FILES['picture']);
if (
    isset($_POST['title']) && !empty($_POST['title'])&&
    isset($_POST['chanteur']) && !empty($_POST['chanteur'])&&
    isset($_FILES['picture']) && !empty($_FILES['picture'])&&
    isset($_FILES['audio']) && !empty($_FILES['audio'])
    ) {

        $title = $_POST['title'];
        $request = $database->query("SELECT id FROM musique WHERE title = '$title' ");
        $titleexist = $request->fetch();

        
        $imageName = $_FILES['picture']['name'];
        move_uploaded_file($_FILES['picture']['tmp_name'], '../image/'. $imageName);
        $pathImage = './image/'. $imageName ;
        


        $audioName = $_FILES['audio']['name'];
        move_uploaded_file($_FILES['audio']['tmp_name'], '../son/'. $audioName);
        $pathAudio = './son/'. $audioName ;
        


        

      

      if ($titleexist) {
        
      } else {
       $request = $database->prepare("INSERT INTO musique (title, picture, audio, chanteur) VALUES (:title, :picture, :audio, :chanteur)");
       $resultat = $request->execute([
           'title' => $_POST['title'],
           'picture' => $pathImage,
           'audio' => $pathAudio,
           'chanteur' => $_POST['chanteur']
        ]);        

      }

      header("Location: ../../index.php");   
        
    }
    
    

?>