<?php
include_once 'DB.php';
session_start();

include_once 'PHP/modifieMembre.php';
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
		    
		    <h1 id="titreText">Modifier un membre</h1>
		    
		    <form method="post" action="utilisateurs.php?modifie=1" id="ajoutForma">
		    	Nom : <input type="text" name="nom" value="<?php echo isset($nom)?$nom:$_SESSION['nomModif']?>"><br>
		    	Prénom : <input type="text" name="prenom" value="<?php echo isset($prenom)?$prenom:$_SESSION['prenomModif']?>"><br>
		    	Adresse Mail : <input type="text" name="mail" value="<?php echo isset($mail)?$mail:$_SESSION['mailModif']?>"><br>
		    	<input type="submit" value="Valider"> <input onclick="self.location.href='utilisateurs.php'" type="button" value="Annuler">
		    </form>
    		<?php include 'presentation/footer.php';?>
    	
    	</div>
    	
  
    
    </body>



</html>