<?php
include_once 'DB.php';
?>

<!-- Cette page est le menu présent sur toutes les pages du site si une cession est active.
	Elle regroupe les onglets permettant la navigation sur le site.
	Elle est incluse sur toutes les pages du sites -->
	
	
<header>
		<!-- Image M2L de la présentation -->
	    <p id="M2L">
		    <img id="imgM2L" src="presentation/M2L.png" alt="Photo non chargée" title="M2L">
	    </p>
	   </header>
	   
	   <!-- Menu du site avec les onglets de navigation-->
	    <nav id="menu">
			    <div id="menuDivAccueil"><a href="accueil.php">Accueil</a></div>
			    <?php if ($_SESSION['responsable'] == 1) { echo "<div id=\"menuDivFormation\"><a href=\"utilisateurs.php\" id=\"menuF\">Utilisateurs</a></div>"; }?>
			    <div id="menuDivCompte"><a href="compte.php" id="menuC">Compte</a></div>
			    <div id="deconnexion"><a href="PHP/deconnexion.php" id="menuC">Se Déconnecter</a></div>
			    <div id="menuDivLog"><?php echo "Bienvenue ".$_SESSION['prenom']." ".$_SESSION['nom'];?></div>
	    </nav>
	    
	    
	