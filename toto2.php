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
	
if ( isset($_POST) && (!empty($_POST['username'])) && (!empty($_POST['password']))) 
{

  extract($_POST); 
	
	$query = $pdo->prepare"SELECT id,username,password FROM 'membres' WHERE 'username' = '$username";
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

?>