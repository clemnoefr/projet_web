<?php
	include 'header.php';
?><title>Inscription</title>
<link rel="stylesheet" type="text/css" href="../style/style_form.css">
<link rel="stylesheet" type="text/css" href="../style/style_inscription.css">

<div id="border">
<div id="form">
	<span><h1>Inscription</h1></span>
	<form method="POST">
		<div class="form-group text-center">
			<div id="nom_prenom">
				<div class="mb-3 mt-3 nom">
				    <label for="nom" class="form-label">Nom</label>
				    <input type="text" class="form-control w-75 mx-auto" id="nom" placeholder="Nom" aria-describedby="#">
				</div>

				<div class="mb-3 mt-3 prenom">
				    <label for="prenom" class="form-label">Prénom</label>
				    <input type="text" class="form-control w-75 mx-auto" id="prenom" placeholder="Prénom" aria-describedby="#">
				</div>
			</div>

		    <div class="mb-3 mt-2">
			    <label for="mail" class="form-label">E-mail</label>
			    <input type="email" class="form-control w-50 mx-auto" id="mail" placeholder="Mail" aria-describedby="#">
			</div>
			<div id="mdp">
			  	<div class="mb-3 mt-2 mdp">
				    <label for="mdp" class="form-label">Mot de passe</label>
				    <input type="password" class="form-control w-75 mx-auto" id="mdp" placeholder="Mot de passe" >
			  	</div>

			  	<div class="mb-3 mt-2 mdp_confirm">
				    <label for="mdp" class="form-label">Confirmer mot de passe</label>
				    <input type="password" class="form-control w-75 mx-auto" id="mdp" placeholder="Mot de passe" >
			  	</div>

			  	<input type="hidden" name="" id="role" value="role"><br>
		  	</div>
		  	<button type="submit" class="btn">S'inscrire</button>
		</div>
	</form>
</div>
</div>

<?php
	include 'footer.php';
?>