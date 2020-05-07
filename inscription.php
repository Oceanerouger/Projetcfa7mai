

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CFA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/inscription.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script>
</head>
<body>



    <div class="container3">
    <div class="col-12 zone_retour">
        <a href="index.php">
            <img class="fleche_retour" src="img/icon-gauche.png" alt="fleche_retour" />
        </a>
    </div>
        <h3 class="newCompte">Nouveau Compte</h3>
       
        <form name ="myForm" action="dbconnect.php" method="post" enctype="multipart/form-data"> 

        <input name="avatar" type="file" multiple accept=".png, .jpg, .jpeg, .gif"/>
        <label for="file" type="file"><svg class="paper_clip" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.44 48.44">
                <defs>
                    <style>
                        .cls-1 {
                            fill: none;
                            stroke: #4cbfdd;
                            stroke-miterlimit: 10;
                            stroke-width: 0.1px;
                        }

                        .cls-2 {
                            fill: #fff;
                        }
                    </style>
                </defs>
                <title>Fichier 2</title>
                <g id="Calque_2" data-name="Calque 2">
                    <g id="Calque_1-2" data-name="Calque 1">
                        <path class="cls-1"
                            d="M48.39,24.22A24.17,24.17,0,1,1,24.21.05,24.16,24.16,0,0,1,48.39,24.22Z" />
                        <path class="cls-2"
                            d="M16.49,26.67c-.13.15-.29.3-.42.43-.71.7-1.42,1.4-2.11,2.11a3.42,3.42,0,0,0-1,3.1,3.36,3.36,0,0,0,1.32,2.13,3.4,3.4,0,0,0,2.16.73A3.51,3.51,0,0,0,19,34.1l2.49-2.46,2.37-2.42,1.74-1.71c.55-.57,1.13-1.12,1.66-1.67a2.23,2.23,0,0,0-2.85-3.38,6.24,6.24,0,0,0-.76.7l-4.35,4.36-.87.86c-.21-.23-.43-.44-.63-.65l.59-.63c1-1,2-2,3-3l2-2a3.14,3.14,0,0,1,3.53-.65A3.09,3.09,0,0,1,28.74,24a3,3,0,0,1-.83,2.49c-.62.66-1.3,1.31-1.94,2-.92.93-1.85,1.85-2.79,2.78s-1.63,1.64-2.44,2.46c-.4.4-.8.81-1.22,1.2A4.4,4.4,0,0,1,17.46,36a4.33,4.33,0,0,1-3-.34A4.09,4.09,0,0,1,12.74,34a4.4,4.4,0,0,1-.47-3.83,4.48,4.48,0,0,1,1.18-1.79c.47-.46.92-.93,1.38-1.39s.68-.66,1-1l.63.63" />
                        <path class="cls-2"
                            d="M16.49,26.67,15.86,26l.76-.81,3.47-3.46c.83-.85,1.68-1.68,2.51-2.51l2.72-2.72A6.38,6.38,0,0,1,27.48,15a5.92,5.92,0,0,1,2.76-.39,5.33,5.33,0,0,1,2.27.77,5.6,5.6,0,0,1,2.12,2.17,5.53,5.53,0,0,1,.68,3.24,5.41,5.41,0,0,1-1,2.79A11.47,11.47,0,0,1,33,25l-3.84,3.84-1.36,1.35c-1.24,1.23-2.45,2.47-3.7,3.72L24,34l-.63-.66c.14-.18.33-.34.49-.51l.94-.95.86-.86c.36-.37.71-.72,1.09-1.08l2-2,1.74-1.74c.58-.59,1.19-1.18,1.77-1.79.29-.27.58-.54.83-.82a4.53,4.53,0,0,0,1.14-2.16A4.43,4.43,0,0,0,34.22,19a4.8,4.8,0,0,0-1.09-2,4.85,4.85,0,0,0-2.2-1.35,5.05,5.05,0,0,0-1.58-.18,4.87,4.87,0,0,0-2.14.66,6.33,6.33,0,0,0-1.32,1.11c-.47.46-.94.94-1.39,1.39-.82.81-1.62,1.62-2.43,2.43s-1.42,1.42-2.13,2.15-1.51,1.49-2.27,2.24l-1.13,1.14s-.05,0-.05,0" />
                    </g>
                </g>
            </svg>
            <h3 class="telechargement"> Télécharger une photo de profil</h3>
        </label>
     
       
        
        


        <input type="text" placeholder="Nom" name="nom" class="nominsc" href="dbconnect.php" required>
        <input type="text" placeholder="Prénom" name="prenom" class="prenominsc" required>
        <input type="text" placeholder="Email" name="email" class="emailinsc" required>
        <input type="password" placeholder="Mot de passe" name="mdp" class="passwordinsc" value=""required>
  <div>
    
  </div> 
  <div id="preview-file" widht="10px">

  </div>
  


<button type="submit"name="submitinscription" value="Envoyé"><object ...><svg class="arrow" height="70px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4.75 4.75">
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
        </svg></button></<button>
    </form>
        
    <script type="text/javascript">
  function createThumbnail(sFile,sId) {
	var oReader = new FileReader();
	oReader.addEventListener('load', function() {
	  var oImgElement = document.createElement('img');
	  oImgElement.classList.add('imgPreview') 
	  oImgElement.src = this.result;
	  document.getElementById('preview-'+sId).appendChild(oImgElement);
	}, false);
  
	oReader.readAsDataURL(sFile);
  
  }//function
  function changeInputFil(oEvent){
	var oInputFile = oEvent.currentTarget,
		sName = oInputFile.name,
		aFiles = oInputFile.files,
		aAllowedTypes = ['png', 'jpg', 'jpeg', 'gif'],
		imgType;  
	document.getElementById('preview-'+sName).innerHTML ='';
	for (var i = 0 ; i < aFiles.length ; i++) {
	  imgType = aFiles[i].name.split('.');
	  imgType = imgType[imgType.length - 1];
	  if(aAllowedTypes.indexOf(imgType) != -1) {
		createThumbnail(aFiles[i],sName);
	  }//if
	}//for
  }//function 
  
  document.addEventListener('DOMContentLoaded',function(){
   var aFileInput = document.forms['myForm'].querySelectorAll('[type=file]');
	for(var k = 0; k < aFileInput.length;k++){
	  aFileInput[k].addEventListener('change', changeInputFil, false);
	}//for
  });
</script>

<div class="direction"> 
Ce n’est pas votre première fois ici? <a href="connexion.php">Se connecter</a></div>
       <a href="connexion.php">
       
        
                
    </div>
</body>
</html>
 