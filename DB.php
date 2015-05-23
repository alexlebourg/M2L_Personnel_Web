<?php

// Page de connexion à la base de données et des requêtes


//Connexion à la BDD

function Connect()
{
		$user = 'root';
		$pass = 'root';
		$hote = 'localhost';
		$port = '8889';
		$base = 'M2L_Personnel';
		$dsn="mysql:$hote;port=$port;dbname=$base";
		
		try
		{
			$dbh = new PDO($dsn, $user, $pass);
			$dbh->exec("SET CHARACTER SET utf8");
				
		}
		catch (PDOException $e)
		{
			die("Erreur! :" . $e->getMessage());
		}
		return $dbh;
}




//       ---------------- Requêtes ----------------



/*Select récupérant les données correspondant au pseudo renseigné afin de vérifier la correspondance
	et afficher les données correspondantes */

function VerifConnexion(){
	//connection a la base
	$dbh = connect();
	$sql = "SELECT password, mail FROM User WHERE mail = '".$_POST['mail']."'";
	$query = $dbh->query($sql);

	if ($query)
	{
		return $query;
	}
	else
	{
		return false;
	}

}


//Select récupérant les données de l'utilisateur connecté

function SelectUtilisateur(){
	//connection a la base
	$dbh = connect();
	$sql = "SELECT * FROM User WHERE mail = '".$_SESSION['mail']."'";
	$query = $dbh->query($sql);

	if ($query)
	{
		return $query;
	}
	else
	{
		return false;
	}

}

//Select récupérant la ligue du responsable connecté

function Ligue()
{
	//Connection à la base
	$dbh = connect();
	$sql="SELECT * FROM Ligue WHERE Ligue.idAdmin  = '".$_SESSION['identifiant']."'";
	$query  =  $dbh->query($sql);

	if ($query)
	{
		return  $query->fetchAll();
	}
	else
	{
		return false;
	}

}


//Select récupérant les membre de la ligue de l'utilisateur connecté

function Membres(){
	//connection a la base
	$dbh = connect();
	$sql = "SELECT * FROM User WHERE User.idLigue = '".$_SESSION['idLigue']."' AND idUtilisateur != '".$_SESSION['identifiant']."'";
	$query = $dbh->query($sql);

	if ($query)
	{
		return $query;
	}
	else
	{
		return false;
	}

}

//UPDATE Modifiant le Password de l'utilisateur connecté

function ChangePass(){
	//connection a la base
	$dbh = connect();
	$sql = "UPDATE User SET password = MD5('".$_SESSION['nPwd1']."') WHERE idUtilisateur = '".$_SESSION['identifiant']."'";
	$query = $dbh->query($sql);

	if ($query)
	{
		return $query;
	}
	else
	{
		return false;
	}

}

//Supprime un membre

function SupprimeMembre(){
	//connection a la base
	$dbh = connect();
	$sql = "DELETE FROM User WHERE idUtilisateur = '".$_SESSION['idMembre']."'";
	$query = $dbh->query($sql);

	if ($query)
	{
		return $query;
	}
	else
	{
		return false;
	}

}

//Ajoute un membre

function AjoutMembre(){
	//connection a la base
	$dbh = connect();
	$sql = "INSERT INTO User (nom, prenom, mail, password, admin, superAdmin, idLigue) VALUES ('".$_SESSION['nomMembre']."', '".$_SESSION['prenomMembre']."', '".$_SESSION['mailMembre']."', '".$_SESSION['passMembre']."',0,0,'".$_SESSION['idLigue']."')";
	$query = $dbh->query($sql);

	if ($query)
	{
		return $query;
	}
	else
	{
		return false;
	}

}


//récupère les information de l'utilisateur à modifier

function InfoModifie(){
	//connection a la base
	$dbh = connect();
	$sql = "SELECT * FROM User WHERE idUtilisateur = '".$_SESSION['idMembre']."'";
	$query = $dbh->query($sql);

	if ($query)
	{
		return $query;
	}
	else
	{
		return false;
	}

}

//Modifie un membre

function ModifieMembre(){
	//connection a la base
	$dbh = connect();
	$sql = "Update User SET nom = '".$_SESSION['nomMembre']."', prenom = '".$_SESSION['prenomMembre']."', mail = '".$_SESSION['mailMembre']."' WHERE idUtilisateur = '".$_SESSION['idMembre']."'";
	$query = $dbh->query($sql);

	if ($query)
	{
		return $query;
	}
	else
	{
		return false;
	}

}
?>		