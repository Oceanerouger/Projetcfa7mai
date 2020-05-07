<?php session_start(); ?>
<?php
ini_set('display_errors', 'On');
error_reporting(-1);
 $curseura = $_POST['curseura'];
 $user = $_SESSION['id'];
 /*$curseurb = $_POST["curseurb"];
 $curseurc = $_POST["curseurc"];
 $curseurd = $_POST["curseurd"];
 $curseure = $_POST["curseure"];
 $curseurf = $_POST["curseurf"];
 $curseurg = $_POST["curseurg"];
 $curseurh = $_POST["curseurh"];
 $curseuri = $_POST["curseuri"];
 $curseurj = $_POST["curseurj"];*/
               try{
                if (isset($_POST['curseura'])) {

                    
                    
                
       //var_dump($curseura) ;           
                           
                   //On se connecte à la BDD
                   $bdd = new PDO("mysql:host=localhost;dbname=applicationCfa",'root','root');
                   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
                         
                   //On insère les données reçues
                   $bdd = $bdd->prepare("INSERT INTO curseur (user_id, curseura, curseurb, curseurc, curseurd, curseure, curseurf, curseurg, curseurh, curseuri, curseurj)VALUES (:user, :curseura, :curseurb, :curseurc, :curseurd, :curseure, :curseurf, :curseurg, :curseurh, :curseuri, :curseurj) ");
           
                   
                   $bdd->execute(array(
					':user' => $user,
                    ':curseura' => $curseura,
					':curseurb' => 0,
					':curseurc' => 0,
					':curseurd' => 25,
					':curseure' => 45,
					':curseurf' => 78,
					':curseurg' => 50,
					':curseurh' => 35,
					':curseuri' => 50,
                    ':curseurj' => 45
                ));
                   		
                   //On renvoie l'utilisateur vers la page de latelier2
                   echo 'Coucou PHP ' .$curseura;
                   
                   }
                 
                   
               }
               catch(PDOException $e){
                   echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
               }
              
            
?>