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

    <div id="formtxt" class="custom-message text-center">
        <p>Remplissez le champs ci-dessous pour vous inscrire :</p>
    </div> 
    <div class="container-fluid custom-container">
    <div class="custom-form">
        <form action="../Process//traitement.php" method="post">
            <label for="Pseudo1" class="d-flex align-items-center flex-column mb-5 ">Entrer un pseudo</label>
            <input type="text" class="form-control" id="username" name="username">
            <input type="submit" value="Envoyer" >
        </form>
    </div>
</div>
</body>
</html>