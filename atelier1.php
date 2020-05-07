<?php session_start();echo $_SESSION['id'];?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CFA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
              <link rel="stylesheet" type="text/css" href="css/atelier1.css">
    </head>
    
<body>
<div class="container4">
<div class="col-12 zone_retour">
                <a href="connexion.php">
        
            
        <img class="fleche_retour" src="img/icon-gauche.png" alt="fleche_retour" />
                </div>
                </a>
    <h3 class="atelier1">Atelier1<br>Rencontre avec des entrepreneurs</h3>
    <img class="logo2" src="img/logo2.png" width="140px">
    <h3 class="ordre">A quel entrepreneur vous identifiez vous
        le plus ? Cochez les cases de 1 à 3 par ordre de<br>
        préférence.</h3>

       
       

<form name="classement" class="dropper" action="traitement.php" method="post">
<div  class="dropper1">
<div  class="draggable">Entreprise 1</div>
    <div class="draggable2">
            <label for="1">1</label><input type="radio" name="entreprise1" value="1" id="1" checked="checked" /> 
            <label for="2">2</label><input type="radio" name="entreprise1" value="2" id="2" /> 
            <label for="3">3</label><input type="radio" name="entreprise1" value="3" id="3" />
    </div>
</div>
<div  class="dropper1">
    <div  class="draggable">Entreprise 2</div>
        <div class="draggable2">
            <label for="1">1</label><input type="radio" name="entreprise2" value="1" id="1"  /> 
            <label for="2">2</label><input type="radio" name="entreprise2" value="2" id="2" checked="checked"/> 
            <label for="3">3</label><input type="radio" name="entreprise2" value="3" id="3" />
        </div>   
</div>   
<div  class="dropper1">
    <div  class="draggable">Entreprise 3</div>
        <div class="draggable2">
            <label for="1">1</label><input type="radio" name="entreprise3" value="1" id="1"  /> 
            <label for="2">2</label><input type="radio" name="entreprise3" value="2" id="2" /> 
            <label for="3">3</label><input type="radio" name="entreprise3" value="3" id="3" checked="checked"/>
        </div>
</div>

        
        <button type="submit" name="submitclass" value="Envoyé"><object ...><svg class="arrow" height="70px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4.75 4.75">
            <defs>
                <style>
                    .cls-100,
                    .cls-300 {
                        fill: #fff;
                    }

                    .cls-200 {
                        fill: #4cbfdd;
                        opacity: 0.6;
                    }

                    .cls-300 {
                        stroke: #4cbfdd;
                        stroke-miterlimit: 10;
                        stroke-width: 0.1px;
                    }
                </style>
            </defs>
            <title></title>
            <g id="Calque_2" data-name="Calque 2">
                <g id="Calque_1-2" data-name="Calque 1">
                    <path class="cls-100" d="M3.9,2.38A1.53,1.53,0,1,1,2.38.85,1.52,1.52,0,0,1,3.9,2.38Z" />
                    <circle class="cls-200" cx="2.38" cy="2.38" r="2.38" />
                    <path class="cls-300"
                        d="M2.6,1.65l.79.74-.79.74-.17-.22.41-.37s0,0-.06,0H1.36v-.3H2.81L2.4,1.88Z" />
                </g>
            </g>
        </svg>
    </form>
   
        
</div>
<?php

?>
<script src="js/atelier1.js" type="text/javascript"></script>
</body>
</html>
