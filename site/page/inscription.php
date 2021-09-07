<?php
	include 'header.php';
?><title>Inscription</title>
<link rel="stylesheet" type="text/css" href="../style/style_form.css">
<link rel="stylesheet" type="text/css" href="../style/style_inscription.css">

<div id="border">
<div id="form">
	<span><h1>Inscription</h1></span>
	<form method="POST" action="http://localhost/dev_web/api/user.php">
		<div class="form-group text-center">
			<div id="nom_prenom">
				<div class="mb-3 mt-3 nom">
				    <label for="nom" class="form-label">Nom</label>
				    <input type="text" class="form-control w-75 mx-auto" name="nom" id="nom" placeholder="Nom" aria-describedby="#">
				</div>

				<div class="mb-3 mt-3 prenom">
				    <label for="prenom" class="form-label">Prénom</label>
				    <input type="text" class="form-control w-75 mx-auto" id="prenom" name="prenom" placeholder="Prénom" aria-describedby="#">
				</div>
			</div>

		    <div class="mb-3 mt-2">
			    <label for="mail" class="form-label">E-mail</label>
			    <input type="email" class="form-control w-50 mx-auto" id="mail" name="mail" placeholder="Mail" aria-describedby="#">
			</div>
			<div id="mdp">
			  	<div class="mb-3 mt-2 mdp">
				    <label for="mdp" class="form-label">Mot de passe</label>
				    <input type="password" class="form-control w-75 mx-auto" id="mdp" name="mdp" placeholder="Mot de passe" >
			  	</div>

			  
		  	</div>
		  	<button type="submit" class="btn">S'inscrire</button>
		</div>
	</form>
</div>
</div>

<?php
	include 'footer.php';
?>