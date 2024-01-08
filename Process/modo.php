<?php
session_start();
include_once "../partials/header-retour-acceuil.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <style>
        .custom-container {
            height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .custom-form {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            width: 400px;
            /* Réduire la largeur */
        }
    </style>


<div class="container-fluid custom-container">
    <div class="custom-form">
        <div id="formtxt" class="custom-message  text-center">
            <p>Remplissez le champs ci-dessous pour vous inscrire :</p>
        </div> 
        <form action="../Process/traitementson.php" method="post" enctype='multipart/form-data'>
            <label for="Pseudo1" class="d-flex align-items-center flex-column mb-3 ">Entrer un titre de musique</label>
            <input type="text" class="form-control" id="title" name="title">
            


            <label for="Pseudo1" class="d-flex align-items-center flex-column mb-3 ">Entrer un chanteur</label>
            <input type="text" class="form-control" id="chanteur" name="chanteur">
            


            <label for="Pseudo1" class="d-flex align-items-center flex-column mb-3 ">Entrer un fichier image</label>
            <input type="file" class="form-control" id="picture" name="picture">
         


            <label for="Pseudo1" class="d-flex align-items-center flex-column mb-3 ">Entrer un fichier audio</label>
            <input type="file" class="form-control" id="audio" name="audio">


            <button class="btn btn-success" type="submit">Ajouter</button>

            
        </form>
    </div>
</div>

</body>

</html>