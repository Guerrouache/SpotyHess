<?php
require_once "../Process/connect_db.php";
session_start();
include_once "../partials/header-retour-acceuil.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>
<body>

<div class="p-4">
        <div class="container">
            
            <div class="row p-3">
               
                <div class="col-md-3">
                    <a href = "./play.php"><img src="https://i.scdn.co/image/ab67616d0000b27357c87959e63d634cd5128e36" alt="PNL" class="img-fluid" id="image1"></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                    <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
                    </svg> 
                </div>
                <div class="col-md-3">
                    <a href = "./play.php"> <img src="https://i.scdn.co/image/ab67616d0000b2733c505b5ddcbdf80c7dff5a1f" alt="JUL" class="img-fluid " id="image2"></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                    <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
                    </svg> 
                </div>
                <div class="col-md-3">
                    <a href = "./play.php">   <img src="https://i.scdn.co/image/ab67616d0000b2736558afda5c28b5df010d1db3" alt="MMZ" class="img-fluid" id="image3"></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                    <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
                    </svg> 
                </div>
                <div class="col-md-3">
                    <a href = "./play.php"><img src="https://i.scdn.co/image/ab67616d0000b27397340a7fb13c8f6fa15c1356" alt="DTF" class="img-fluid" id="image4"></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                    <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
                    </svg> 
                </div>
              
            </div> 
             
            <div class="row p-3">
                
                <div class="col-md-3">
                    <a href = "./play.php"> <img src="https://i.scdn.co/image/ab67616d0000b273d058cd84602ed47f4f0a391b" alt="PNL" class="img-fluid" id="image1"></a>
                    <i class="bi bi-play-fill"></i>
                </div>
                <div class="col-md-3">
                    <a href = "./play.php"><img src="https://www.abcdrduson.com/wp-content/uploads/2022/02/Jul_Independance.jpg" alt="JUL" class="img-fluid " id="image2"></a>
                </div>
                <div class="col-md-3">
                    <a href = "./play.php"><img src="https://static.fnac-static.com/multimedia/Images/FR/NR/57/c8/cf/13617239/1507-1/tsp20210622142126/Enfant2LaRue-Volume-2.jpg" alt="MMZ" class="img-fluid" id="image3"></a>
                </div>
                <div class="col-md-3">
                    <a href = "./play.php"> <img src="https://www.goutemesdisques.com/uploads/tx_gmdchron/pi1/ADC.jpg" alt="DTF" class="img-fluid" id="image4"></a>
                </div>
               
            </div>
          

        </div>
    </div>



    <script>
  function afficherImage(imageSrc) {
    // Stocker le lien de l'image dans le stockage local
    localStorage.setItem('imageSelectionnee', imageSrc);
    // Rediriger vers la page suivante
    window.location.href = 'page_suivante.html';
  }
  </script>

</body>
</html>