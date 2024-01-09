<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist</title>
</head>
<?php 


if (isset ($_GET['id'])&& !empty($_GET['id'])) {
    
    $musicId=$_GET['id'];
    $request=$database->query("SELECT * FROM musique WHERE id =$musicId");
    $muzik=$request->fetch();
    var_dump($muzik);
}

?>


<body>

<form action=""method="get">

<img src="" alt="">



</form>
<h1>Laissez un commentaire</h1>
  
  <form action="traitementcom.php" method="POST">
    <label for="pseudo">Pseudo :</label>
    <input type="text" id="pseudo" name="pseudo" required><br><br>
    
    <label for="commentaire">Commentaire :</label><br>
    <textarea id="commentaire" name="commentaire" rows="4" cols="50" required></textarea><br><br>
    
    <input type="submit" value="Envoyer">
  </form>

    
</body>
</html>