<html>
<link rel="stylesheet" href="inscription.css">
	<head>
	

	<title>Exemple - Mot de passe </title>
	</head>
	<body>
	<a>
	<b>
	<h1>Inscription</h1>
	</b>
	<center>
	<form action ="register.php" method="POST">
		<label><I> Identifiant (session) : </I></label>
		<input type="text" name="username" required /><br/><br/>
		<label> <I>Mot de Passe (session) :</I></label>
		<input type="password" name="password" required /><br/><br/>
		<label> <I>Retapez mot de passe :</I></label>
		<input type="password" name="password2" required /><br/><br/>
		<label> <I>Votre classe :</I></label>
		<SELECT name="classe" size="1">
		<OPTION selected>6°1
		<OPTION>6°2
		<OPTION>6°3
		<OPTION>5°1
		<OPTION>5°2
		<OPTION>5°3
		<OPTION>4°1
		<OPTION>4°2
		<OPTION>4°3
		<OPTION>3°1
		<OPTION>3°2
		<OPTION>3°3
		<OPTION>2°1
		<OPTION>2°2
		<OPTION>2°3
		<OPTION>1°L
		<OPTION>1°ES
		<OPTION>1°S1
		<OPTION>1°S2
		<OPTION>T°L
		<OPTION>T°ES
		<OPTION>T°S1
		<OPTION>T°S2
		</SELECT><br><br>
		<label> <I>Numéro carte de cantine :</I></label>
		<input type="text" name="ndc" required /><br/><br/>
		<input type="submit" /><br>
		<h4>Une fois validé cliquez sur Continuer</h4>
		<br>
		<a href="login.php"> <input type="button" Value=" Continuer---->" name="connexion" style="padding:3"></a>
	</form>
	</center>
	</a>
		<h3> ATTENTION!<br> Toute tentative d'usurpation d'identité sera punissable par la loi.<br>Ce site est placé sous surveillance.</h3>
	</body>
	<p>
	</p>
</html>