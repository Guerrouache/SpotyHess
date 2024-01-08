<?php
require_once "../Process/connect_db.php";
session_start();
include_once "./header-retour-acceuil.php";

$request=$database->query('SELECT * FROM musique');
$sons=$request->fetchALL();

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
            
            <th> <?php echo $son["title"]  ?></th>
            <th> <a href="play.php"><img src="<?php echo $son['picture']?>" ></th>
            <p><?= $son['id'] ?></p>
            <th> <?php echo $son["chanteur"]  ?></th>
          </tr>
          <?php } ?>
        </tbody>
    </table>


  </div>

</body>
</html>