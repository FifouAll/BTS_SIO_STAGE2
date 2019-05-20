
<html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=5"/>
<link rel="stylesheet" type="text/css" href="style.css">

<div class="titre">
<h1>SELF RAPIDE</h1>
</div>
<img class="jp2"src="images/jp2.jpg" alt="JPII" style='width:250px';/>
<div class="test1">
<h3>Ensemble Scolaire Jean-Paul II</h3>
</div>
<head>
<title> Self rapide </title>
<br>
<br>
</head>
<body>
<a href="login.php"> <input class="bouton1"type="button"  Value=" Connexion" name="connexion" style="padding:20" ></a>
<img class="burger" src="images/burger.jpg" alt="Burger" style='width:480px;'/>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<center>
<a href="http://www.jpii.fr/"> <input class="bouton2"type="button" Value=" Site JPII.fr" name="site"style="padding:20"></a>
<a href="logout.php"> <input class="bouton3"type="button" Value=" Déconnexion" name="Deconnexion"style="padding:20"></a>
<br>
<br>
<div class="connexion" >
<?php
session_start();
if(!empty($_SESSION['username']) && !empty($_SESSION['password']) && !empty($_SESSION['classe']))
{
	echo "Bienvenue ".$_SESSION['username'];
}
else
{
	echo "Identifiez vous!";
}
?>
</div>
</center>
</body>
</html>


<?php
#define ('dbuser','root');
#define ('dbpw',"x!op5C0&1*");
#define ('dbhost',"192.169.1.135");
#define ('dbname','self');
$dbc = mysqli_connect('127.0.0.1','root', 'x!op5C0&1*', 'cantine' );
#$dbc = new PDO("mysql:host=217.128.246.132;port=8889;dbname=self, username=root, password=x!op5C0&1*");
if(!$dbc){ die("DATABASE CONNECTION FAILED:".mysqli_error($dbc));
exit();
}
mysqli_close($dbc);

?>
<?php
if(isset($_POST['Deconnexion']))
{
	echo "Vous êtes déconnecté(e)";
}
?>