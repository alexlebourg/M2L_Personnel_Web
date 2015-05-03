<?php
include_once 'DB.php';
?>

<!-- Cette page est le menu présent sur la page d'accueil du site si aucune cession n'est active.
	Elle contient le formulaire de connexion -->
	
	<header>
	    <p id="M2L">
		    <img id="imgM2L" src="presentation/M2L.png" alt="Photo non chargée" title="M2L">
	    </p>
	</header>
	
	
	<!-- Menu du site -->
	    
	<nav id="menu">
		<div id="menuConnexion">
			<form  method="post" action="accueil.php?test=2">
				Connexion:
				<input type="text" name="mail" placeholder="mail" value="<?php echo isset($mail)?$mail:''?>"/>
				<input type="password" name="pwd" placeholder="Mot de Passe" value="<?php echo isset($pwd)?$pwd:''?>"/>
				<input type="submit" name="OK" value="Se Connecter">
			</form>
			<div id="connexion">
				<!-- Affichage des erreurs de connexion -->
				<?php if (isset($MessageErreur))
					{ for($i=0; $i<count($MessageErreur); $i++ )
    					{
    						echo "- $MessageErreur[$i] ";
    					}
					}?>
   			</div>
   		</div>
   	</nav>
	    