<?php
	include 'header.php';

	//si n'est pas (!=) user
	if ($_SESSION['role'] != 'user'){
		header('Location: index.php');
	}
	
?><title>Modifier compte</title>
<link rel="stylesheet" type="text/css" href="../style/style_update_recette.css">

<div id="bloc">
	<form method="POST">
		<h1>Modifier mon compte</h1>
		<div>
			<label for="" class="form-label">Nom</label><br>
			<input type="text" name="" id="" class="form-control mb-3" value="">
		</div>

		<div>
			<label for="" class="form-label">Prénom</label>
			<input type="text" name="" id="" class="form-control mb-3" value="">
		</div>
		<div>
			<label for="" class="form-label">Email</label>
			<input type="text" name="" id="" class="form-control mb-3" value="">
		</div>

		<div>
			<label for="" class="form-label mt-3">Mot de passe</label><br>
			<input type="text" name="" id="" class="form-control mb-3" value="">
		</div>

		<div>
			<label for="" class="form-label mt-3">Confirmer mot de passe</label><br>
			<input type="text" name="" id="" class="form-control mb-3" value="">
		</div>

		<button type="submit" class="btn mb-5">Modifier</button>	
	</form>
</div>
<div id="retour">
	<a href="mon_compte.php">Retour</a>  
</div> 

<?php
	include 'footer.php';
?>