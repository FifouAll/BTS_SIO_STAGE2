<?php

session_start(); 

//include 'check1.php';
	//header('Content-Disposition: attachment; filename=download.csv');
	//header('Content-Type: application/csv');

if(!empty($_POST['ali']))
{
	$fp = fopen("tata.txt","a");
	//fputs($fp, "Commande de : ".$_SESSION['username']);
	//fputs($fp, "\n");
	//fputs($fp, "\n");
	fputs($fp, "".$_SESSION['Nom']."".$_SESSION['Prenom']."".$_SESSION['Classe']);
	fputs($fp, ",");
	foreach($_POST['ali'] as $valeur)
	{
		//$somme = 0;
		//$i = 1;
		//$recup = $somme + $recup;
		$recup = $valeur;
		//$fp = fopen("tata.txt","a");
		//fputs($fp, "Bienvenue ".$_SESSION['username']);
		
		fputs($fp, "$recup");
		fputs($fp, ",");
	}
	//fputs($fp, "\n");
	//fputs($fp, "\n");
	//fputs($fp, "Fin de la commande de : ".$_SESSION['username']); //username
	//fputs($fp, compter());
	//fputs($fp, "\n");
	fputs($fp, "\n");
	fclose($fp);
	echo "Commande réalisée avec succès</br>";
	echo "<a href='login.php'>Retour à l'accueil</a>"; //à modifié
	
}
else
{
	echo "Veuillez choisir un aliment au moins!</br>";
	echo '<a href="commande.php">Faire demi-tour!</a>';
}


//mettre condition si rien n'est coché
/*
	if(isset($_POST['test']))
	{
		$bouf = $_POST['bouf'];
		echo "Voici l'ensemble de votre menu : <br/>";
		foreach($bouf as $key => $value)
		{
			//echo $ke."<br/>";
			echo "$value<br/>"
		}
		//echo cela vous convient?
	}
	else
	{
		echo "Veuillez prendre un aliment svp.";
	}*/
?>

<script>
function compter() 
{
   var somme = 0.00;
   var checks = document.forms["superForm"].getElementsByTagName("input");
   for (var i = 0, iMax = checks.length; i < iMax; ++i) 
   {
      if ((checks[i].type == "checkbox") && checks[i].checked) 
	  {
		 
         somme += 1 * checks[i].value;
      }
   }
   //somme = Math.floor(somme, 2);
   somme = Math.round(100*somme)/100;
   document.getElementById("affichage").innerHTML = somme;
   
}

</script>