<html>
<link rel="stylesheet" href="login.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<div class="titre">
<center>
<h2>Connexion</h2>
</center>
</div>
<br>
<br>
<br>
<br>
<div class="tout">
	<form action="login_post.php" method="POST">
	<div class="fondu">
	<br>
		<label><I>Identifiant (session) :</I>
		</div>
		<input class="user" type="text" name="username" style="padding:5"required /><br/><br/></label>
		<div class="fondm">
		<a><label><I>Mot de passe (session) :</I></label>
		</div>
		<input class="pass" type="password" name="password" style="padding:5" required /><br/><br/></a>
		<div class="fondc">
		<label><I>Votre classe : </I></label>
		</div>
		<SELECT class="classe" name="classe" size="1" style="padding:5">
		<OPTION selected >6eme1
		<OPTION>6eme2
		<OPTION>6eme3
		<OPTION>5eme1
		<OPTION>5eme2
		<OPTION>5eme3
		<OPTION>4eme1
		<OPTION>4eme2
		<OPTION>4eme3
		<OPTION>3eme1
		<OPTION>3eme2
		<OPTION>3eme3
		<OPTION>Sec_1
		<OPTION>Sec_2
		<OPTION>Sec_3
		<OPTION>Prem_L
		<OPTION>Prem_ES
		<OPTION>Prem_S1
		<OPTION>Prem_S2
		<OPTION>Term_L
		<OPTION>Term_ES
		<OPTION>Term_S1
		<OPTION>Term_S2
		</SELECT><br><br>
		
		<a href="commande.php"><input class="connexion"type="submit" name="login" value="Se connecter" style="padding:20" />
	</form>
</head>
</div>
</html>
