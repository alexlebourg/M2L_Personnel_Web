<?php
session_start(); 
if ($_SESSION['test'] != 1)
{header('Location: accueil.php');}

include_once 'PHP/changePassword.php';
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
		    
		    <h1 id="titreText">Vos informations:</h1>
		    
		    <?php
		    if (!empty($_SESSION['modif'])){
			    if ($_SESSION['modif']==1){
			    		echo "<p id=\"ajoutOK\">Le mot de passe a été changé</p>";
			    		$_SESSION['modif']=0;}
				if ($_SESSION['modif']==2){
						echo "<p id=\"ajoutOK\">Incohérence entre les mots de passe</p>";
						$_SESSION['modif']=0;}
				if ($_SESSION['modif']==3){
					echo "<p id=\"ajoutOK\">Veuillez remplir tous les champs</p>";
					$_SESSION['modif']=0;}
		    }?>	
	    	
    		<div id="tableInfo">
    			<table id="info">
					    <?php
					    	$liste = SelectUtilisateur();
					    	foreach ($liste as $ligne) { ?>
				    <tr>
					    <td id="td1">Nom du salarié</td>
					    <td id="td2"><?php echo $ligne['nom'];?></td>
				    </tr>
				    <tr>
					    <td id="td1">Prénom du salarié</td>
					    <td id="td2"><?php echo $ligne['prenom'];?></td>
				    </tr>
				    <tr>
				    	<td id="td1">Adresse Mail</td>
					    <td id="td2"><?php echo $ligne['mail'];?></td>
				    <form method="post" action="compte.php">
				    </tr>
					    <td id="td1">Modifier votre mot de passe</td>
						<td id="td2"><input type="password" name="nPwd1" placeholder="Nouveau Mot de Passe" value="<?php echo isset($nPwd1)?$nPwd1:''?>"/></td>
				    </tr>
					    <td id="td1">Confirmer le mot de passe</td>
						<td id="td2"><input type="password" name="nPwd2" placeholder="Confirmer Mot de Passe" value="<?php echo isset($nPwd2)?$nPwd2:''?>"/></td> 
				    </tr>
				    </tr>
					    <td id="td"></td>
						<td id="td"><input type="submit" name="pwdOK" value="Valider"></td> 
				    </tr>
				    </form>
				    <?php } ?>
			    </table>
				 
    		</div>
    		<?php include 'presentation/footer.php';?>
    	</div>
    
    </body>



</html>