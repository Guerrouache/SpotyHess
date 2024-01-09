<?php
require_once "../Process/connect_db.php";
session_start();
include_once "../partials/header-retour-acceuil.php";

$request=$database->query('SELECT * FROM musique');
$sons=$request->fetchAll();

if (isset ($_GET['pseudo'])&& !empty($_GET['pseudo'])) {
    echo $_GET['pseudo'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>
<body>



<div class="container">
    <table class="">
      <tbody>
        <?php
        foreach ($sons as $son) { ?>
          <tr>

            <th> <?php echo $son["title"]?></th>
            <th> <a href="./play.php?id=<?= $son['id'] ?>"><img src="<?php echo $son['picture']?>"></th> 
            <th> <?php echo $son["chanteur"]?></th>
            <th> <audio controls src="<?php echo $son["audio"]?>"></audio></th>
           
          </tr>
          <?php } ?>
        </tbody>
    </table>


  </div>
</body>
</html>