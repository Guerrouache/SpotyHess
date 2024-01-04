<?php
session_start();
include_once "../header.php";

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
        body {
            background-color: #000;
        }

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
    <br>
    <br>
    <br>
   
    <div id="formtxt" class="custom-message text-white text-center">
        <p>Remplissez le champs ci-dessous pour vous inscrire :</p>
    </div> 
    <div class="container-fluid custom-container">
    <div class="custom-form">
        <form action="../Process//traitement.php" method="post">
            <label for="Pseudo1" class="d-flex align-items-center flex-column mb-3 ">Entrer un pseudo</label>
            <input type="text" class="form-control" id="username" name="username">
            <input type="submit" value="Envoyer">
        </form>
    </div>
</div>

</body>

</html>