<?php
session_start();  // démarrage d'une session

// on vérifie que les variables de session identifiant l'utilisateur existent
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $login = $_SESSION['username'];
    $mdp = $_SESSION['password'];
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Accueil du site</title>
    </head>
    <body>
	<h1>TEST réussi </h1>
        <?php
        if (isset($username) && isset($password)) {
            echo "Bienvenue, " . escape($username) . ". Votre mot de passe est " . escape($password) . ".";
            echo "<h1>Accueil du site</h1>";
        }

        ?>
    </body>
</html>