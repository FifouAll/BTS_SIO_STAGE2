<html>
<form method="post">
<label> Nom: <input type="text" name="nom" /></label><br/>
<label> Prenom: <input type="text" name="prenom" /></label><br/>
<label> Mot de Passe: <input type="password" name="mdp" /></label><br/>
<label> Confirmation du MDP: <input type="password" name="mdp2" /></label><br/>
<label> Numéro de carte: <input type="texte" name="carte" /></label><br/>
<input type="submit" value="S'inscrire" />
</form>
</html>
<?php
if(!empty($_POST['nom']))
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=test;charset=utf8', 'root', 'x!op5C0&1*');
	$mdp =($_POST['mdp']);
	$mdp2 =($_POST['mdp2']);
	if($mdp == $mdp2)
		{
		$nom =($_POST['nom']);
		$carte =($_POST['carte']);
		$prenom =($_POST['prenom']);
		$mdp = sha1($mdp);
		
		
	}
	else
	{
		echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas...';
	}
}
include("verification.php");
?>