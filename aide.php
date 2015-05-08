<?php
session_start();
?>


<!-- Page d'acueil du site Web de la maison des ligues avec
	- soit un formulaire de connexion si aucune cession n'est active
	- Soit le menu avec les onglets permettant la navigaton sur le site -->
	
<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Besoin d'aide</title>
    </head>

    <body>
    
    	<div id="corpsSite">
	    
		   <!-- Inclusion de presentation.php - entpête du site web avec la photo M2L -
		   		La condition IF permet d'insérer le menu avec les différents onglets de navigation pour une cession ouverte
		   		ou le formulaire de connexion si aucune cession n'est ouverte -->
		   
		   <?php
		   if ($_SESSION['test'] == 1)
		   {include 'presentation/presentationConnectee.php';}
		   else
		   {include 'presentation/presentation.php';} ?>
		   
		    
		    <!-- Documentation du site -->
		    
		    <div id="textAide">
		    	
		    	<h1 id="titreText">Présentation du site</h1>
		    	
		    	
		    	<ol>
		    		<li><a id="lienEmploye" href="#conn">Connexion</a></li>
		    		<li><a id="lienEmploye" href="#navig">Menu</a></li>
		    		<li><a id="lienEmploye" href="#leg">Mentions Légales</a></li>
		    		<li><a id="lienEmploye" href="#infoPerso">Accès aux informations personnelles</a></li>
		    		<li><a id="lienEmploye" href="#respon">Vous êtes administrateur : Gérer votre ligue</a></li>
		    	</ol>
		    	
		    	<br><br>
		    	<p>
			    	<h2 id="conn">Connexion</h2>
			    	Pour vous connecter, entrer votre pseudo et votre mot de Passe. Cliquer sur <b>"Connexion"</b> ou taper "Enter"
				    <p ><img id="image" src="aideImage/Connexion.png" alt="Photo non chargée" title="Connexion.png"></p>
			    </p>
			    
			    <br><br>
			    <p>
			    	<h2 id="navig">Menu</h2>
			    	Le menu présente les principaux liens de navigation du site : 
			    	<br><b>- Accueil :</b> renvoie à la page d'accueil
			    	<br><b>- Compte :</b> regroupe les données personnelles de l'utilisateur
				    <p><img id="image" src="aideImage/MenuEmploye.png" width="80%" alt="Photo non chargée" title="MenuEmploye.png"></p>				    
				    <br>Si vous êtes un administrateur de ligue, un lien <b>"Utilisateurs"</b> s'ajoute afin de donner accès aux informations des membres de votre ligue
					<p><img id="image" src="aideImage/MenuAdministrateur.png" width="80%" alt="Photo non chargée" title="MenuAdministrateur.png"></p>
				    </p>
			    <br><br>
			    <p>
				    <h2 id="leg">Mentions légales</h2>
				    Afin d'accéder aux mentions légales, cliquer sur le lien <b>"Mentions Légales"</b> au bas de la page
				    <p><img id="image" src="aideImage/Footer.png" width="90%" alt="Photo non chargée" title="Footer.png"></p>
			    </p>
			    <br><br>
			    
			    <p>
				    <h2 id="infoPerso">Informations Personnelles</h2>
			    	Pour accéder à vos informations personnelles, cliquer sur <b>"Compte"</b> dans le menu.<br>
			    	Vous optiendrez un tableau avec vos informations et la possibilité de modifier votre mot de passe :
			    	<p><img id="image" src="aideImage/Compte.png" alt="Photo non chargée" title="DonneesPerso.png"></p>
		    	</p>
			    <br><br>
			    <p>
			    	<h2 id="respon">Gérer votre ligue</h2>
			    	Etant administrateur de votre ligue, vous en avez accès à la liste des membres.
			    	<br>Pour cela, aller dans la rubrique <b>"Utilisateur"</b>, un tableau listera tous les membres de votre ligue :
			    	<p><img id="image" src="aideImage/ListeUtilisateur.png" width="90%" alt="Photo non chargée" title="ListeUtilisateur.png"></p>
			    	Pour supprimer un membre, choisissez la personne dans la liste déroulante et cliquer sur "Supprimer".
			    	<p><img id="image" src="aideImage/SupprAjoutUtilisateur.png" alt="Photo non chargée" title="SupprAjoutUtilisateur.png"></p>
			    	Pour en ajouter un, cliquer sur "Ajouter un membre", remplissez le formulaire puis validez.
			    	<p><img id="image" src="aideImage/FormulaireAjoutMembre.png" alt="Photo non chargée" title="FormulaireAjoutMembre.png"></p>
			    	Pour modifier un membre, choisissez la personne dans la liste déroulante et cliquer sur "Modifier".
			    	<p><img id="image" src="aideImage/ModifierUtilisateur.png" alt="Photo non chargée" title="ModifierUtilisateur.png"></p>
			    	Mettez à jour le formulaire pré-rempli, puis validez.
			    	<p><img id="image" src="aideImage/FormulaireModifierMembre.png" alt="Photo non chargée" title="FormulaireModifierMembre.png"></p>
		    	</p>
			    
		    </div>
		    <?php include 'presentation/footer.php';?>
    	</div>
    
    </body>



</html>