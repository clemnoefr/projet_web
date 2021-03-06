<?php
	include 'header.php';

	//si n'est pas (!=) admin ou (||) user.
	if ($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'user'){
		
		header('Location: index.php');
	}
	
?>
<link rel="stylesheet" type="text/css" href="../style/style_ajout1.css">
<title>Ajout</title>

<h1>Ajouter une recette</h1>

<div id="bloc">
	<form method="POST" action="http://localhost/dev_web/api/recettes.php" enctype='multipart/form-data'>
		<div>
			<label for="" class="form-label">Nom de la recette</label>
			<input type="text" name="nom_recette" id="nom_recette" class="form-control" placeholder="Nom recette"><br>
		</div>

		<div>
			<input type="hidden" name="photo" value="">
			<label for="photo_item" class="form-label mb-3">Insérer une photo</label><br>
			<input type="file" name="image" id="image" class="form-control mb-3" value="">
		</div>

		<div>
			<label for="" class="form-label">Nombre de personne</label>
			<input type="number" name="nombre_personne" id="nombre_personne" class="form-control mb-3" placeholder="Nombre de personne" value="">
		</div>

		<div>
			<label for="" class="form-label">Temps de préparation (en min)</label>
			<input type="number" name="duree_recette" id="duree_recette" class="form-control" placeholder="Temps de préparation"><br>
		</div>

		<div>
			<label for="" class="form-label">Catégorie de la recette</label>
			<select name="categorie" id="">
    			<option value="ent">Entrée</option>
    			<option value="pla">Plat</option>
    			<option value="des">Dessert</option>
			</select><br><br>
		</div>

		<div>
			<label for="" class="form-label mt-3">Ingrédients et mesures</label><br>
			<textarea value="liste_ingredients" id="" name="liste_ingredients" rows="15" cols="60" class="form-control mb-3" placeholder="farine 200g 
sucre 100g"></textarea>
		</div>

		<div>
			<label for="" class="form-label mt-3">Ustensiles</label><br>
			<textarea value="liste_ustensiles" id="" name="liste_ustensiles" rows="15" cols="60" class="form-control mb-3" placeholder="louche 
fouet"></textarea>
		</div>

		<div>
			<label for="" class="form-label mt-3">Préparation de la recette</label><br>
			<textarea value="" id="recette_texte" name="recette_texte" rows="15" cols="60" class="form-control mb-3"></textarea>
		</div>

		<input type="hidden" name="ID_user" id="ID_user" value="<?= $_SESSION['ID_user'] ?>">
		
		<button type="submit" class="btn" value="ajouter">Ajouter</button>	
	</form>	
</div>



<?php
	include 'footer.php';
?>
