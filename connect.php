<?php
mysql_connect("127.0.0.1", "root", "x!op5C0&1*");
mysql_select_db("cantine");
$quete = mysql_query("SELECT * FROM membres");
while($membres = mysql_fetch_array($quete))
{
	echo 'Nom: ';
	echo $membres['nom'];
	echo 'Prenom: ';
	echo $membres['prenom'];
	echo 'Mot de Passe: ';
	echo $membres['mdp'];
	echo ' Numero de carte: ';
	echo $membres['carte'];
echo '<a href="test.php?action=acceter&carte='.$membres['carte'].'">Accepter</a>';
echo '<a href="test.php?action=refuser&carte='.$membres['carte'].'">Refuser</a>';
echo '<br/>';
}
if(isset)$_GET['action'] AND isset($_GET['id']))
{
	$action = $_GET['action'];
	if($action == "accepter")
	{
		$carte = $_GET['carte']
		$quete2 = mysql_query("SELECT * FROM membres WHERE carte='$carte'");
		$connexion = mysql_fetch_array($quete2);
	    $nom = $connexion['nom'];
		$prenom = $connexion['prenom'];
		$mdp = $connexion['mdp'];
		$carte = $connexion['carte'];
		mysql_query("INSERT INTO connexion VALUES('$nom', '$prenom', '$mdp', '$carte')");
		mysql_query("DELETE FROM membres WHERE carte='$carte'");
	}
	elseif($action == "refuser")
	{
		$carte = $_GET['carte'];
		mysql_query("DELETE FROM membres WHERE carte='$carte'");
	}
}
include("verification.php");

?>