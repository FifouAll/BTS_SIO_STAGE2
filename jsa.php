<?php

switch ($_SERVER['REQUEST_METHOD'])
{
	case "POST":
		$json_str = file_get_contents('php://input');
		$jObj = json_decode($json_str, true);
		
		try
		{
			$pdo = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', 'x!op5C0&1*');
		}
		catch (PDOException $e)
		{
			http_response_code(401);
			echo "Accès non autorisé";
			die();
		}
		
		$query = $pdo->prepare('INSERT INTO membres (nom, mdp) VALUES(:username, :password);');
		$query->bindParam(1,$username);
		$query->bindParam(2,$password);
		
		$username = $jObj['username'];
		$password = $jObj['password'];
		header('Location: essaie1.php');
		
		if($query->execute() >0)
		{
			http_response_code(201);
			echo "Elément ajouté";
		} 
		else 
		{
			http_response_code(204);
			echo "Pas de contenu ou erreur";
		}
		break;
		
/*$pdo = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', 'x!op5C0&1*');
if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["password2"]))
{
	if($_POST["password"] == $_POST["password2"])
	{
		$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
		//$hash = password_hash($_POST["password"]);
		$query = $pdo->prepare('INSERT INTO membres (nom, mdp) VALUES(:username, :password);');
		$query->bindParam(':nom', $_POST["username"]);
		$query->bindParam(':mdp', $hash);
		//$query->bindParam(':mdp', $hash($_POST["password"]));
		$query->execute();
		header('Location: essaie1.php');
		exit();
	}*/
}
?>