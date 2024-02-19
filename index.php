<?php
require_once "./Process/connect_db.php";
session_start();
include_once "./partials/header.php ";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>SpotyHess</title>
</head>

<body class="bg-dark">


    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="https://i.scdn.co/image/ab67616d0000b27357c87959e63d634cd5128e36" alt="PNL" class="img-fluid" id="image1">
                </div>
                <div class="col-md-3">
                    <img src="https://i.scdn.co/image/ab67616d0000b2733c505b5ddcbdf80c7dff5a1f" alt="JUL" class="img-fluid " id="image2">
                </div>
                <div class="col-md-3">
                    <img src="https://i.scdn.co/image/ab67616d0000b2736558afda5c28b5df010d1db3" alt="MMZ" class="img-fluid" id="image3">
                </div>
                <div class="col-md-3">
                    <img src="https://i.scdn.co/image/ab67616d0000b27397340a7fb13c8f6fa15c1356" alt="DTF" class="img-fluid" id="image4">
                    
                </div>
                <div class="d-flex justify-content-center p-5">
                    <button class="btn btn-success" onclick="changerImages()">Changer Playlist</button>
                </div>
                <div>
                    <p class="text-center">Vous n'avez pas de compte? <a href="./Formulaire/Inscription.php">Je n'ai pas SpotyHess</a></p>
                </div>
            </div>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <script src="./JS/Image.js"></script>
</body>


</html>