<html>
<form method="post">
<label> Nom: <input type="text" name="nom" /></label><br/>
<label> Prenom: <input type="text" name="prenom" /></label><br/>
<label> Mot de Passe: <input type="password" name="mdp" /></label><br/>
<label> Numéro de carte: <input type="texte" name="carte" /></label><br/>
<input type="submit" value="S'inscrire" />
</form>
</html>
<?php
mysql_connect("127.0.0.1", "root", "x!op5C0&1*");
mysql_select_db("cantine");
$nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
$mdp = mysql_real_escape_string(htmlspecialchars($_POST['mdp']));
$mdp = sha1($mdp);
$nbre = mysql_query("SELECT COUNT(*) AS exist FROM connexion WHERE prenom='$prenom'");
$donnees = mysql_fetch_array($nbre);
if($donnees['exist'] != 0)
{
	$quete = mysql_query("SELECT * FROM membres WHERE nom='$nom'");
	$infos = mysql_fetch_array($quete);
	if($mdp == $infos['mdp']);
	{
		
	}
}
include("verification.php");

?>