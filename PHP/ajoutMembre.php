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
	if (!empty($_POST['passMembre']))
	{
		$_SESSION['passMembre'] = $_POST['passMembre'];
	}
}

$_SESSION['passMembre']= md5($_SESSION['passMembre']);

AjoutMembre();

$_SESSION['ajout']="1"
?>
