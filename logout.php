<?php
// On active les sessions :
	session_start();


 
// On detruit les sessions :
	require 'fonctions.php';
	unset($_SESSION['username'], $_SESSION['password'], $_SESSION['ndc'], $_SESSION['classe']);
	session_destroy();


 
// On redirige le visiteur vers la page désirée :
	header('Location: index.php');
	exit();
?>