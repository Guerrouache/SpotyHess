<?php
require_once "../Process/connect_db.php";
session_start();
include_once "../partials/header-retour-acceuil.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=p">
  <title>play</title>
</head>

<body class="bg-dark">

  <?php

  if (isset($_GET['id']) && !empty($_GET['id'])) {

    $musicId = $_GET['id'];
    $request = $database->query("SELECT * FROM musique WHERE id =$musicId");
    $muzik = $request->fetch();
  }
  ?>
<div class="d-flex justify-content-center">
<a href = 'http://localhost/SpotyHess/SpotyHess/partials/play.php?id=<?php echo intval($musicId)-1 ?>'id="retour" style="background: none; border: none;">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
</svg>
 </a>
  <div class="" style="width: 25rem;">
    <img src="<?php echo $muzik['picture'] ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $muzik["chanteur"] ?></h5>
      <p class="card-text"><?php echo $muzik["title"] ?></p>
      <audio controls src="<?php echo $muzik["audio"] ?>"></audio>
    </div>
  </div>
<a href = 'http://localhost/SpotyHess/SpotyHess/partials/play.php?id=<?php echo intval($musicId)+1 ?>'id="suivant" style="background: none; border: none;">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
    </svg>
 </a>

</div>



</form>
<h1>Laissez un commentaire</h1>
  
  <form action="../Process/traitementcom.php" method="POST">
    <label for="pseudo">Pseudo :</label>
    <input type="text" id="pseudo" name="pseudo" required><br><br>
    
    <label for="commentaire">Commentaire :</label><br>
    <textarea id="commentaire" name="commentaire" rows="4" cols="50" required></textarea><br><br>
    
    <input type="submit" value="Envoyer">
  </form>



  <script> 
 
let btnsuivant =  document.querySelector('#suivant');

let currentCount = <?php $musicId ?>

    btnsuivant.addEventListener('click', (suiv)=> {
      $musicId ++;
    btnsuivant.href = 'http://localhost/SpotyHess/SpotyHess/partials/play.php?id='. $musicId ;

    if ($musicId = 16) {
      suiv(); $musicId = 1 ;
    }else {

    }
   

});


    btnsuivant.addEventListener('click', (suiv)=> {
      $musicId --;
    btnsuivant.href = 'http://localhost/SpotyHess/SpotyHess/partials/play.php?id='. $musicId ;
   
    if ($musicId = 1) {
      suiv(); $musicId = 16 ;
    }else {

    }

});



</script>
  
</body>

</html>