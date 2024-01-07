<?php
require_once "./Process/connect_db.php";
session_start();
include_once "./header2.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=p">
    <title>play</title>
</head>
<body>

<h1>Image Sélectionnée</h1>
  <div id="image-container">
    <img id="selected-image" src="" alt="Image sélectionnée">
  </div>

    



  <script>
    // Fonction pour récupérer le paramètre d'URL contenant le lien de l'image sélectionnée
    function getImageParam() {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get('image');
    }

    // Récupérer le lien de l'image sélectionnée depuis l'URL
    const selectedImageSrc = getImageParam();

    // Insérer l'image sélectionnée dans la balise img
    const selectedImageElement = document.getElementById('selected-image');
    selectedImageElement.src = selectedImageSrc;
   </script>
</body>
</html>