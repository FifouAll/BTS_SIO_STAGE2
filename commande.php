<?php
require "auth_session.php";


//session_start();
if(isset($_POST['envoyer']))
{
	if(!empty($_POST["ali"]))
	{
		echo '<h3>Tu as sélectionné : </h3>';
		foreach($_POST['ali'] as $aliment)
		{
			echo '<p>'.$aliment.'</p>';
		}
	}
   
}
//echo "Bienvenue ".$_SESSION['username'];
/*else
{
	echo "Aucune checkbox cochée";
}
*/

//faire une redirection si non identifiée
?>
<h1><center><u>Voici l'ensemble du menu : </u></center></h1>

<html>
<link rel="stylesheet" href="commande.css">
<form action="check.php" method="POST" name="superForm">
<table>
<tr>
<th>
<h1><center>Boisson</center></h1>
</th>
<th><h1>Prix</h1></th>
</tr>
<tr><th>
<input type="checkbox" name="icetea" onclick="compter()" value="1.00" name="ali[]"><input type="text" name="ICETEA" value="Ice Tea" > <br>
</th><th>1.00€</th></tr>
<tr><th>
<input type="checkbox" name="coca" onclick="compter()" value="1.00" name="ali[]"><input type="text" name="COCA" value="Coca"> <br>
</th><th>1.00€</th></tr>
<tr><th>
<input type="checkbox" name="fanta" onclick="compter()" value="1.00" name="ali[]"><input type="text" name="FANTA" value="Fanta"> <br>
</th><th>1.00€</th></tr>
<tr><th>
<input type="checkbox" name="eau" onclick="compter()" value="0.70" name="ali[]"><input type="text" name="EAU DE SOURCE" value="Eau de Source"><br>
</th><th>0.70€</th></tr>
<tr><th>
<h1><center>Fruit</center></h1>
</th></tr>
<tr><th>
<!--<input type="checkbox" name="orange" onclick="compter()" value="5" name="ali[]"><input type="text" name="ORANGE" value="Orange"><br>-->
</th><th>0.70€</th></tr>
<tr><th>
<input type="hidden" name="poire" onclick="compter() "value="0.70" name="ali[]"><input type="hidden" name="POIRE" value="Poire"> <br>
</th><th>0.70€</th></tr>
<tr><th>
<input type="checkbox" name="pomme" onclick="compter()" value="0.70" name="ali[]"><input type="text" name="POMME" value="Pomme"><br>
</th><th>0.70€</th></tr>
<tr><th>
<h1><center>Petite Faim</center></h1>
</th></tr>
<tr><th>
<input type="checkbox" name="beignet" onclick="compter()" value="1.20" name="ali[]"><input type="text" name="BEIGNET" value="Beignet au chocolat"><br>
</th><th>1.20€</th></tr>
<tr><th>
<input type="checkbox" name="brownies" onclick="compter()" value="1.28" name="ali[]"><input type="text" name="BROWNIES" value="Brownies"> <br>
</th><th>1.28€</th></tr>
<tr><th>
<input type="checkbox" name="chausson" onclick="compter()" value="1.45" name="ali[]"><input type="text" name="CHAUSSON" value="Chausson au pommes"><br>
</th><th>1.45€</th></tr>
<tr><th>
<input type="checkbox" name="cookies" onclick="compter()" value="0.76" name="ali[]"><input type="text" name="COOKIES" value="Cookies"><br>
</th><th>0.76€</th></tr>
<tr><th>
<input type="checkbox" name="donut" onclick="compter()" value="0.73" name="ali[]"><input type="text" name="DONUT" value="Donut's"><br>
</th><th>0.73€</th></tr>
<tr><th>
<input type="checkbox" name="muffin" onclick="compter()" value="0.63" name="ali[]"><input type="text" name="MUFFIN" value="Muffin's"><br>
</th><th>0.63€</th></tr>
<tr><th>
<input type="checkbox" name="suisse" onclick="compter()" value="1.44" name="ali[]"><input type="text" name="SUISSE" value="Suisse Chocolat"><br>
</th><th>1.44€</th></tr>
<tr><th>
<input type="checkbox" name="torsade" onclick="compter()" value="1.02" name="ali[]"><input type="text" name="TORSADE" value="Torsade"><br>
</th><th>1.02€</th></tr>
<tr><th>
<h1><center>Salade</center></h1>
</th></tr>
<tr><th>
<input type="checkbox" name="salade" onclick="compter()" value="2.27" name="ali[]">Salade composée <br>
</th><th>2.27€</th></tr>
<tr><th>
<h1><center>Sandwich</center></h1>
</th></tr>
<tr><th>
<input type="checkbox" name="cjambon" onclick="compter()" value="3.00" name="ali[]">Sandwich crudités jambon <br>
</th><th>3.00€</th></tr>
<tr><th>
<input type="checkbox" name="coeuf" onclick="compter()" value="3.00" name="ali[]">Sandwich crudités oeuf <br>
</th><th>3.00€</th></tr>
<tr><th>
<input type="checkbox" name="jbeurre" onclick="compter()" value="2.80" name="ali[]">Sandwich jambon beurre <br>
</th><th>2.80€</th></tr>
<tr><th>
<input type="checkbox" name="jtomate" onclick="compter()" value="2.80" name="ali[]">Sandwich jambon tomate <br>
</th><th>2.80€</th></tr>
<tr><th>
<input type="checkbox" name="parisien" onclick="compter()" value="2.80" name="ali[]">Sandwich parisien <br>
</th><th>2.80€</th></tr>
<tr><th>
<input type="checkbox" name="ttoeuf" onclick="compter()" value="3.20" name="ali[]">Sandwich thon tomate oeuf <br>
</th><th>3.20€</th></tr>
<tr><th>
<h1><center>Pataterie</center></h1>
</th></tr>
<tr><th>
<input type="checkbox" name="chips" onclick="compter()" value="0.45" name="ali[]">Chips <br>
</th><th>0.45€</th></tr>
<tr><th>
<input type="checkbox" name="frites" onclick="compter()" value="1.28" name="ali[]">Frites <br>
</th><th>1.28€</th></tr>
<tr><th>
<h1><center>Grande Faim</center></h1>
</th></tr>
<tr><th>
<input type="checkbox" name="cburger" onclick="compter()" value="2.47" name="ali[]">Cheese burger <br>
</th><th>2.47€</th></tr>
<tr><th>
<input type="checkbox" name="cbleu" onclick="compter()" value="2.80" name="ali[]">Cordon bleu <br>
</th><th>2.80€</th></tr>
<tr><th>
<input type="checkbox" name="cafromage" onclick="compter()" value="2.47" name="ali[]">Crêpe au fromage <br>
</th><th>2.47€</th></tr>
<tr><th>
<input type="checkbox" name="cajambon" onclick="compter()" value="3.00" name="ali[]">Croissant au jambon <br>
</th><th>3.00€</th></tr>
<tr><th>
<input type="checkbox" name="cmonsieur" onclick="compter()" value="2.84" name="ali[]"> Croque monsieur <br>
</th><th>2.84€</th></tr>
<tr><th>
<input type="checkbox" name="hdog" onclick="compter()" value="2.38" name="ali[]">Hot dog <br>
</th><th>2.38€</th></tr>
<tr><th>
<input type="checkbox" name="kebab" onclick="compter()" value="3.20" name="ali[]">Kebab <br>
</th><th>3.20€</th></tr>
<tr><th>
<input type="checkbox" name="nuggets" onclick="compter()" value="3.00" name="ali[]">Nuggets <br>
</th><th>3.00€</th></tr>
<tr><th>
<input type="checkbox" name="pcampagnard" onclick="compter()" value="3.20" name="ali[]">Pain campagnard <br>
</th><th>3.20€</th></tr>
<tr><th>
<input type="checkbox" name="panini" onclick="compter()" value="2.80" name="ali[]">Panini <br>
</th><th>2.80€</th></tr>
<tr><th>
<input type="checkbox" name="pizza" onclick="compter()" value="2.43" name="ali[]">Pizza <br>
</th><th>2.43€</th></tr>
<tr><th>
<input type="checkbox" name="qlorraine" onclick="compter()" value="2.43" name="ali[]">Quiche lorraine <br>
</th><th>2.43€</th></tr>
<tr><th>
<h1>Total: <span id="affichage"></span></h1>
</th></tr>

</table>
</br>
</br>
</br>
</br>
	<input type="Submit" name="envoyer" value="Envoyer">
	<input type="reset" value="Annuler">
</form>
</html>


<script>
function compter() {
   var somme = 0.00;
   var checks = document.forms["superForm"].getElementsByTagName("input");
   for (var i = 0, iMax = checks.length; i < iMax; ++i) {
      if ((checks[i].type == "checkbox") && checks[i].checked) {
         somme += 1 * checks[i].value;
      }
	  
   }
   somme = Math.round(100*somme)/100;
   document.getElementById("affichage").innerHTML = somme;
}
</script>
