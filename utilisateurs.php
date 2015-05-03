<?php
session_start();

//redirection 

if ($_SESSION['test'] != 1)
{header('Location: accueil.php');}
if ($_SESSION['responsable'] == 0)
{header('Location: accueil.php');}

//formulaires

if ($_GET['supprime']==1)
{
	include_once 'PHP/supprimeMembres.php';
}

if ($_GET['ajout']==1)
{
	include_once 'PHP/ajoutMembre.php';
}

if ($_GET['modifie']==1)
{
	include 'PHP/insertionModifMembre.php';
}

?>

<!-- Cette page affiche les formations réalisées de l'utilisateur connecté -->
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
			
	    	<!-- Liste des membre de la ligue de l'utilisateur connecté -->
	     
		 	<h1 id="titreText">Liste des utilisateurs de la ligue : <?php echo $_SESSION['ligue']; ?></h1>
		 	<div id="divFormation">
    
	    	<br>
		    <h2>Liste des Membres</h2>
		    
		    <?php
		    if (!empty($_SESSION['ajout'])){
				if ($_SESSION['ajout']==1){
			    	echo "<p id=\"ajoutOK\">Un Membre a été ajouté</p>";
			    	$_SESSION['ajout']=0;}
			}?>
			
			<?php
		    if (!empty($_SESSION['modifOK'])){
				if ($_SESSION['modifOK']==1){
			    	echo "<p id=\"ajoutOK\">Un Membre a été modifié</p>";
			    	$_SESSION['modifOK']=0;}
			}?>
		    
			<table id="tableFormation">
				<thead>
					<tr>
				    	<td id="tdForm">Nom</td>
				    	<td id="tdDat">Prénom</td>
				    	<td id="tdDure">Adresse Mail</td>
	    			</tr>
	    		</thead>
		    	<?php
		    	$liste = Membres();
	    		foreach ($liste as $ligne) { ?>
	    		<tr>
	    			<td>
	    				<?php echo $ligne['nom'];?>
	    			</td>
	    			<td>
	    				<?php echo $ligne['prenom'];?>
	    			</td>
	    			<td>
	    				<?php echo $ligne['mail'];?>
	    			</td>
	    		</tr>
	    		<?php } ?>
			</table>
			
			<div id="affecterForma">
			
					
							
					<form method="post" action="utilisateurs.php?supprime=1">
						<select name="listeMembres" id="listeMembres">
							<?php $liste = Membres();
		    					foreach ($liste as $ligne) {?>
									<option  value="<?php echo $ligne['idUtilisateur'] ?>"><?php $ligne['idUtilisateur'] = $_SESSION['idMembre']; echo $ligne['nom']." ".$ligne['prenom'];?></option>
							<?php }?>
						</select>
						<input type="submit" value="Supprimer">
						<input onclick="self.location.href='formulaireAjoutMembre.php'" type="button" value="Ajouter un membre">
					</form>
					
				<h2>Modifier un membre</h2>
					<form method="post" action="formulaireModifieMembre.php">
						<select name="listeMembres" id="listeMembres">
							<?php $liste = Membres();
		    					foreach ($liste as $ligne) {?>
									<option  value="<?php echo $ligne['idUtilisateur'] ?>"><?php $ligne['idUtilisateur'] = $_SESSION['idMembre']; echo $ligne['nom']." ".$ligne['prenom'];?></option>
							<?php }?>
						</select>
						<input type="submit" value="Modifier">
					</form>
			</div>				

	    	</div>
	    	<?php include 'presentation/footer.php';?>
	    </div>
	    
    </body>
    
</html>