<?php session_start(); ?>

<?php
var_dump($_FILES,$_POST);
// Variables
$nom = htmlspecialchars($_POST["nom"]);
$prenom = htmlspecialchars($_POST["prenom"]);
$email = htmlspecialchars($_POST["email"]);
$mdp = password_hash($_POST["mdp"], PASSWORD_BCRYPT);
$avatar = $_FILES['avatar']['name'];

$chemin = "/photo".$_SESSION['avatar'].".".$extensionUpload;
try {
    $bdd = new PDO('mysql:host=localhost;dbname=applicationCfa', 'root', 'root');
		// set the PDO error mode to exception
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
		catch(PDOException $e)
		    {
		    echo $sql . "<br>" . $e->getMessage();
		    };

	
if(isset($_POST['submitinscription'])) {
	
	if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['mdp'])) {
			
			$nomlength = strlen($nom);
			
			if($nomlength <= 150) {
				
				if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$reqemail = $bdd->prepare("SELECT * FROM user WHERE email = ?");
	                $reqemail->execute(array($email));
	                $mailexist = $reqemail->rowCount();

	                if($mailexist == 0) {

	                	if(filter_var($nom, FILTER_DEFAULT)) {
	                		$reqmdp = $bdd->prepare("SELECT * FROM user WHERE mdp = ?");
	                		$reqmdp->execute(array($mdp));
	                		$mdpexist = $reqmdp->rowCount();
	                			
	                			if($mdpexist == 0) { 

									$sql = "INSERT INTO user (nom, prenom, email, mdp, avatar)
									VALUES ('$nom', '$prenom', '$email', '$mdp', '$avatar')";
									// use exec() because no results are returned
									$bdd->exec($sql);
									/*echo "En cours d'édition";*/							
									 			
								
	

	$bdd = null;
	
	header('location: connexion.php');

								} else {
									echo "Ce pseudo existe déjà !";
								}

							} else {
								echo "Le format du pseudo est incorrect";
							}
						
						} else {
							echo "Ce mail existe déjà";
						}

					} else {
						echo "Veuillez rentrer un mail au format valide";
					}
			
			} else {
				echo "Votre pseudonyme est trop long.";
			}

	} else {
		echo "Veuillez remplir tout les champs.";
	}

} else {
	echo "erreur";
}

if(isset($_POST['submitinscription']))
if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
	$tailleMax = 2097152;
	$extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
	if($_FILES['avatar']['size'] <= $tailleMax) {
	   $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
	   if(in_array($extensionUpload, $extensionsValides)) {
		  $chemin = "avatar/".$_SESSION['avatar'].".".$extensionUpload;
		  // On peut valider le fichier et le stocker définitivement dans le fichier (avatar)
 
		  $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], 'avatar/' .basename($_FILES['avatar']['name']));
		  ;
echo $avatar = $_FILES['avatar']['name'];

		  if($resultat) {
			$updateavatar = $bdd->prepare ('INSERT INTO TABLE photo VALUES($dossier . $fichier');

			 $updateavatar = $bdd->prepare('INSERT user INTO avatar = :avatar WHERE id = :id');
			 $updateavatar->execute(array(
				'avatar' => $_SESSION['avatar'].".".$extensionUpload,
				'id' => $_SESSION['id']
				));
			 header('Location: resultat1.php?id='.$_SESSION['id']);
		  } else {
			 $msg = "Erreur durant l'importation de votre photo de profil";
		  }
	   } else {
		  $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
	   }
	} else {
	   $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
	}
 }
?>




