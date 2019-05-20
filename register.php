<?php
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=cantine;charset=utf8', 'root', 'x!op5C0&1*');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'x!op5C0&1*');
if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["ndc"]) && isset($_POST["classe"]))
{
	$query = $pdo->prepare('INSERT INTO eleves (Nom, Prenom, Classe, Login, Mot_de_passe) VALUES(?, ?,?,?,?)');
	
	$query->execute(array($_POST['ndc'], $_POST['username'], $_POST['password'], $_POST['classe']));

	/*$query = $pdo->prepare("SELECT password FROM membres WHERE username = :username");
	$query->bindParam(':username', $_POST["username"]);*/
	//$query->execute();
	//$result = $query->fetch();
	//$hash = $result[0];
	//$correctPassword = password_verify($_POST["password"], $hash);
	echo "Bienvenu ".$_POST["username"];
	header('Location: inscription.php');
}
else
{
	echo "login/password incorrect";
}
	
/*	
	if($correctPassword)
	{
		echo "Bienvenu ".$_POST["username"];
		header('Location: essaie1.php');
	}
	else
	{
		echo "login/password incorrect";
	}
}*/


?>