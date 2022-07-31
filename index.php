<?php
require_once('include/head.php');
?>
<body>
    <title>Scary Adventure &bull; Accueil</title>
	 <div class="barrescary">Bienvenue sur KoldriaV Roleplay</div>
	 <div id="header">
		   <div id="box">
			   <div id="index">
			   <div class="indextexte">
			   <center><div id="logoindex"><img src="http://zupimages.net/up/16/28/cc3i.png" height="200" width="200"></div>  
				KoldriaV Roleplay est un nouveau mode Rp sur SAMP.</br>
				Le mode de jeu propose différentes histoires scénarisées ainsi que différentes maps.</br>
				Le but dans KoldriaV Roleplay est de joue Roleplay.</br>
				Le script a été réalisé d'une page blanche par KikeKush™</br></br>

				L'inscription depuis le panel nous permet de cibler un public bien précis.</br>
				Nous espérons créer une communauté jeu un Roleplay.</br>
				Pas besoin de validation depuis l'inscription un seul compte est autorisé.</center></div>
				</div>
			   <div id="register">
				<form method="POST" action="">
					
				<div class="boiteerreur">
				<div class="erreur">
				<font color="white"><center><?php if(isset($erreur)){echo '<font color="white">' .$erreur. '</font>';}else{echo"Création de votre compte";}
				?></center></div></div>
				
				<tr><td><input type="text" placeholder="Nom d'utilisateur" name="pseudo" class="register" value="<?php if(isset($pseudo)) { echo $pseudo; }?>" /></td></tr>
					
				<tr><td><input type="password" placeholder="Mot de passe" name="mdp" class="registerpass"/></td></tr>
				<tr><td><input type="password" placeholder="Confirmation - Mot de passe" name="mdp2" class="registerpass"/></td></tr>
					
				<input type="submit" name="forminscription" id="bouton" class="colorbouton" value="Inscription"/></button></form>
				<a href="/login.php"><div class="compte">Connexion au panel</div></a>	
				</div>
			</div>
	</div>
</body>

			
			
