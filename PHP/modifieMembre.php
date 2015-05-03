<?php


include_once 'DB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (!empty($_POST['listeMembres']))
	{
		$_SESSION['idMembre'] = $_POST['listeMembres'];
	}
}


$liste = InfoModifie();
foreach ($liste as $ligne)
{
	$_SESSION['prenomModif'] = $ligne['prenom'];
	$_SESSION['nomModif'] = $ligne['nom'];
	$_SESSION['mailModif'] = $ligne['mail'];
}

?>
