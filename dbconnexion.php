<?php
ini_set('display_errors', 'On');
error_reporting(-1);


$email = htmlspecialchars($_POST["email"]);
$mdp = password_hash($_POST["mdp"], PASSWORD_BCRYPT);
$user = 'root';
$pass = 'root';

try {
    $bdd = new PDO('mysql:host=localhost;dbname=applicationCfa', $user, $pass);
        // set the PDO error mode to exception
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            };

//validation connexion

//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id, mdp FROM user WHERE email = :email');
$req->execute(array(
    'email' => $email));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['email'] = $email;
        //echo 'Vous êtes connecté !' .$_SESSION['id'] ;
        //rediriger vers atelier 1
        header('Location: atelier1.php');
        // ou rester sur la page
        //header('Location: connexion.php'); 
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}


?>
