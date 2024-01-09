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
    
</body>
</html>