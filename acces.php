<?php
session_start();
if(!isset($_SESSION['username'])){
	$msg = 'Désolé, vous devez être identifié pour accéder à la page de Commande';
	header('location: login.php?page=index&msg='.$msg);
} 
else{
	$username = $_SESSION['username'];
}
?>