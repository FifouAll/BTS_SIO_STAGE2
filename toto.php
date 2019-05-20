<?php
session_start();

try
	{
		$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'x!op5C0&1*');
	}
catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}
	
if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = $pdo->prepare("SELECT * FROM 'membres' WHERE 'username' = '$username' AND 'password' = '$password'");
	$query->execute();
	
	$count = $query->fetchColumn();
	//$_SESSION['username'] = $username;
		
	//header('Location = toto.php');
	
	
	if($count == "1")
	{
		$_SESSION['username'] = $username;
		
		header('Location = toto.php');
		
	}
}
	
echo "Welcome ".$_SESSION['username'];

?>