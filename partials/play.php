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

<body>

  <?php

  if (isset($_GET['id']) && !empty($_GET['id'])) {

    $musicId = $_GET['id'];
    $request = $database->query("SELECT * FROM musique WHERE id =$musicId");
    $muzik = $request->fetch();
  }
  ?>
<div class="d-flex justify-content-center">
  <div class="" style="width: 25rem;">
    <img src="<?php echo $muzik['picture'] ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $muzik["chanteur"] ?></h5>
      <p class="card-text"><?php echo $muzik["title"] ?></p>
      <audio controls src="<?php echo $muzik["audio"] ?>"></audio>
    </div>
  </div>
</div>

</body>

</html>