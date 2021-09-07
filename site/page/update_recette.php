<?php
	include 'header.php';

	//si n'est pas (!=) admin ou (||) user.
	if ($_SESSION['role'] != 'admin' || $_SESSION['role'] != 'user'){
		header('Location: index.php');
	}
	
?><title>Modifier recette</title>
<link rel="stylesheet" type="text/css" href="../style/style_update_recette.css">

<div id="bloc">
	<form method="POST">
		<h1>Modifier la recette</h1>
		<div>
			<label for="" class="form-label">Non de la recette</label><br>
			<input type="text" name="nom_recette" id="nom_recette" class="form-control mb-3" value="">
		</div>

		<div>
			<!-- '<img src="../images/' . $[""] . '">';<br>-->
			<img src="../images/gateaux" class="mb-1"><br>
			<input type="hidden" name="photo" value="">
			<label for="photo_item" class="form-label mb-3">Insérer une nouvelle photo</label><br>
			<input type="file" name="" id="" class="mb-3" value="">
		</div>

		<div>
			<label for="" class="form-label">Nombre de personne</label>
			<input type="number" name="" id="" class="form-control mb-3" value="">
		</div>
		
		<div>
			<label for="" class="form-label">Temps de préparation</label>
			<input type="text" name="" id="" class="form-control mb-3" value="">
		</div>

		<label for="" class="form-label">Ingrédient</label><br>
		<div id="ingredient">
			<div id="un">
				<input type="text" name="" class="form-control" value="">
			</div>
			<div>
				<input type="number" name="" id="" class="form-control nombre" value="">
			</div>
			<div>
				<select class="form-select mesure">
					<option value="" name="" id="">cl</option>
					<option value="" name="" id="">L</option>
				</select>
			</div>
		</div>
		<a href="ajout_ingredient.php"><i class="bi bi-plus-circle"></i> Ajouter ingrédient</a>
		<div id="preparation">
			<label for="" class="form-label mt-3">Praparation de la recette</label><br>
			<textarea value="" id="" name="" rows="15" cols="60" class="form-control mb-3"></textarea>
		</div>

		<button type="submit" class="btn mb-5">Modifier</button>	
	</form>
</div>
<div id="retour">
	<a href="mes_recettes.php">Retour</a>  
</div> 

<?php
	include 'footer.php';
?>