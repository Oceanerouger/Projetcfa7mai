<?php session_start();echo $_SESSION['id'];?>
<?php
$user = $_SESSION["id"];
$entreprise1 = $_POST["entreprise1"];
$entreprise2 = $_POST["entreprise2"];
$entreprise3 = $_POST["entreprise3"];

               try{
                   
                   //On se connecte à la BDD
                   $bdd = new PDO("mysql:host=localhost;dbname=applicationCfa",'root','root');
                   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
//var_dump($entreprise1);
                                
                   //On insère les données reçues
                   $bdd = $bdd->prepare("INSERT INTO classement(user_id, entreprise1, entreprise2, entreprise3)
                       VALUES(:user, :entreprise1, :entreprise2, :entreprise3)");
           
                  
                   
                   $bdd->execute(array(
                    ':user' => $user,
                    ':entreprise1' => $entreprise1,
                    ':entreprise2' => $entreprise2,
                    ':entreprise3' => $entreprise3));
                   //On renvoie l'utilisateur vers la page de remerciement
                   header("Location:atelier2.php");
               }
               catch(PDOException $e){
                   echo 'Veuillez remplir tous les champs. Erreur : '.$e->getMessage();
               }
              

?>