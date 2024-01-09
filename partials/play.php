<?php
require_once "../Process/connect_db.php";
session_start();
include_once "./header-retour-acceuil.php";




$request=$database->query('SELECT * FROM musique WHERE id');
$sons=$request->fetchALL();




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=p">
  <title>play</title>
</head>

<body>


  <div class="container">
    <table class="">
      <tbody>
        <?php
        foreach ($sons as $son) { ?>
          <tr>
            <th> <?php echo $son["title"]  ?></th>
            <th> <img src="<?php echo $son['picture']?>" ></th>
            <th> <audio controls> <source src="<?php echo $son["audio"]?>"type="audio/mp3">  </audio></th>
            <th> <?php echo $son["chanteur"]  ?></th>
          </tr>
          <?php } ?>
        </tbody>
    </table>

    


  </div>

</body>

</html>