<?php
session_start();
if(!isset($_SESSION['nom']))
{
	echo 'Vous n etes pas connecte au site. Vous ne pouvez donc pas venir sur cette page.';
	exit;
}
?>