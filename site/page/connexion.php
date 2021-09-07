<?php
	include 'header.php';
?><title>Connexion</title>
<link rel="stylesheet" type="text/css" href="../style/style_form.css">
<link rel="stylesheet" type="text/css" href="../style/style_connexion.css">

<div id="border">
<span><h1>Connexion</h1></span>
	<form method="POST" action="function_connexion.php">
		
		<div class="form-group text-center">
		    <div class="mb-3 pt-3">
			    <label for="mail" class="form-label">E-mail</label>
			    <input type="email" name="email" class="form-control w-50 mx-auto" id="mail" placeholder="Mail" aria-describedby="#">
			</div>

		 	<div class="mb-4">
			    <label for="mdp" class="form-label">Mot de passe</label>
			    <input type="password" name="password" class="form-control w-50 mx-auto" id="mdp" placeholder="Mot de passe" >
		  	</div>

		  	<button type="submit" class="btn">Se connecter</button>
		</div>
	</form>
</div>

<?php
	include 'footer.php';
?>