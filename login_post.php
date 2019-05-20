<?php
session_start();  // démarrage d'une session

// on vérifie que les données du formulaire sont présentes
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['classe'])) {
    require 'fonctions.php';
    $bdd = getBdd();
    // cette requête permet de récupérer l'utilisateur depuis la BD
    $requete = "SELECT * FROM eleves WHERE Login=? AND Mot_de_passe=? AND Classe=?";
    $resultat = $bdd->prepare($requete);
    $username = $_POST['username'];
    $password = $_POST['password'];
	$classe = $_POST['classe'];
    $resultat->execute(array($username, $password, $classe));
    if ($resultat->rowCount() == 1) {
        // l'utilisateur existe dans la table
        // on ajoute ses infos en tant que variables de session
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
		$_SESSION['classe'] = $classe;
        // cette variable indique que l'authentification a réussi
        $authOK = true;
		header('Location: commande.php');
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Résultat de l'authentification</title>
</head>
<link rel="stylesheet" href="login.css">
<body>
<center>
.
    <h1>Résultat de l'authentification</h1>
    <?php
$_SESSION['username']=$_POST['username'];
    if (isset($authOK)) {
        echo '<p>Bienvenue</p>'.$_SESSION['username'];
        echo '<a href="commande.php">Poursuivre vers la page de commande</a>';
    }
    else 
	{ 
       echo "<p>Désole Vous n'avez pas été reconnu(e)</p>".$_SESSION['username'];"veuillez ressaisir vos coordonnées";
	   echo"<body style='background-color:#A2A2A2;'>";
        echo "<p><a href='login.php'><h2>Veuillez de nouveau vous connectez</h2></p>";
	}
	?>
	</center>
</body>
</html>