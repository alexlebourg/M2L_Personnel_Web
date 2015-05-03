<?php
include_once 'DB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (!empty($_POST['nom']))
	{
		$_SESSION['nomMembre'] = $_POST['nom'];
	}
	if (!empty($_POST['prenom']))
	{
		$_SESSION['prenomMembre'] = $_POST['prenom'];
	}
	if (!empty($_POST['mail']))
	{
		$_SESSION['mailMembre'] = $_POST['mail'];
	}
}



ModifieMembre();

$_SESSION['modifOK']="1"
?>
