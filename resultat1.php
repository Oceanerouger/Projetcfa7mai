<!DOCTYPE html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>CFA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/resultat1.css">
<meta http-equiv="Content-Type">
</head>
<body>
<div class="col-12 zone_retour"> <a href="atelier5.php"> <img class="fleche_retour" src="img/icon-gauche.png" alt="fleche_retour" /> </div>
</a>
<div class="container-fluid container5">
  <div class="row">
    <div class="col-12 titre">
      <h3 class="resultat">RESULTATS</h3>
      
      <h3>Visualisation de l'image</h3>
<?php
      include("dbconnect.php");
      ?>
      <img src='<?php echo $avatar['avatar'];?>' />


<?php echo "<img src='".$avatar['avatar']."' />";?>
     <!--place pour intégrer la photo de profil téléchargée-->
      <div class="col-md-12 avatar">
     

      <img class="logo3" src="img/logo3.png" width="150px">
      </div>
      <h3 class="texte"> Le savais-tu? <br>
        <br>
        Tu es un véritable entrepreneur. <br>
        <br>
        Tu es: participatif, délégatif, directif, un leader. <br>
        <br>
        Tu fais des choix et acceptes de te tromper.</h3>
    
	  
	  
    <div class="container-fluid zone_pagination_at2">
  <div class="row">
    <div class="col-10 zone_pag_at2">
      <div class="pagination_at2">
        <div class="page1"></div>
        <div class="page2"></div>
        <div class="page3"></div>
      </div>
    </div>
    <div class="col-2 zone_btn_at2"> <a href="resultat2.php">
      <svg class="bouton_next_at2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2.06 2.06">
        <defs>
          <style>
.cls-1{fill:#4cbfdd;}.cls-2{fill:#fff;fill-rule:evenodd;}
</style>
        </defs>
        <title>Fichier 2</title>
        <g id="Calque_2" data-name="Calque 2">
          <g id="Calque_1-2" data-name="Calque 1">
            <path class="cls-1" d="M2.06,1A1,1,0,1,1,1,0,1,1,0,0,1,2.06,1Z"/>
            <path class="cls-2" d="M1.17,1.07.61.51h.57l.53.53,0,0a.12.12,0,0,0-.05.05l-.5.49H.62Z"/>
          </g>
        </g>
      </svg>
      </a> </div>
  </div>
</div>

  
<script src="js/atelier.js" type="text/javascript"></script>

</body>
</html>
