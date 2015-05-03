<?php
include_once 'DB.php';



// Appelle la fonction récupérant le mote de passe correspondant au pseudo rentré afin d'utoriser l'accès ou non

$liste = VerifConnexion();
	foreach ($liste as $ligne)
		{
			$motDePasse = $ligne['password'];
	        $_SESSION['mail'] = $ligne['mail'];
	        $_SESSION['password'] = $ligne['password'];     	
     	}

//Affichage du nom et du prénom dans le menu si la connexion est réussie
     
$liste = SelectUtilisateur();
     foreach ($liste as $ligne)
     	{
     		$_SESSION['prenom'] = $ligne['prenom'];
            $_SESSION['nom'] = $ligne['nom'];
            $_SESSION['identifiant'] = $ligne['idUtilisateur'];
            $_SESSION['responsable'] = $ligne['admin'];
		} 
/*Récupère le statut responsable (oui ou non) et le service de l'utilisateur connecté
	afin d'autoriser ou non l'affichage des informations des autres membres de son service*/
		
$liste = Ligue();   
	foreach ($liste as $ligne)
	{
		$_SESSION['idLigue'] = $ligne['idLigue'];
		$_SESSION['ligue'] = $ligne['ligue'];
	}

	
         
//Condition IF permettant d'afficher les messages d'erreur lors de la connexion
          
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	$MessageErreur= array();
	
	if (!empty($_POST['mail']))
	{
		$pseudo = $_POST['mail'];
	}
	else
	{
		array_push($MessageErreur, "Identifiant incorrect");
	}
	
	if (!empty($_POST['pwd']) && md5($_POST['pwd']) === $motDePasse)
	{
		$pwd = $_POST['pwd'];
		$_SESSION['test'] = 1;
	}
	else
	{
		array_push($MessageErreur, "Mot de passe incorrect");
	}
		
}

?>

