<?php
session_start(); 
if ($_SESSION['test'] != 1)
{header('Location: accueil.php');}
?>

<!-- Cette page affiche les données personnelles de l'utilisateur connecté -->

<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="style.css">
        
        <title>La Maison des Ligues de Lorraine</title>
    </head>

    <body>
	    
	    <div id="corpsSite">
	    
	    
		    <!-- Inclusion de presentation.php, entpête du site web avec la photo M2L -->
		    <?php include 'presentation/presentationConnectee.php';?>
		    
		    
		    <!-- Présentation des informations personnelles -->
		    
		    <h1 id="titreText">Ajouter un membre</h1>
		    
		    <form method="post" action="utilisateurs.php?ajout=1" id="ajoutForma">
		    	Nom : <input type="text" placeholder="Nom" name="nom" value="<?php echo isset($nom)?$nom:''?>"><br>
		    	Prénom : <input type="text" placeholder="Prénom" name="prenom" value="<?php echo isset($prenom)?$prenom:''?>"><br>
		    	Adresse Mail : <input type="text" placeholder="Courriel" name="mail" value="<?php echo isset($mail)?$mail:''?>"><br>
		    	Mot de passe provisoire : <input type="text" placeholder="Mot de Passe" name="passMembre" value="<?php echo isset($passMembre)?$passMembre:''?>"><br>
		    	<input type="submit" value="Valider"> <input onclick="self.location.href='utilisateurs.php'" type="button" value="Annuler">
		    </form>
    		<?php include 'presentation/footer.php';?>
    	</div>
    
    </body>



</html>