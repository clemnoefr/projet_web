<?php
	include 'header.php';
?><link rel="stylesheet" type="text/css" href="../style/style_ajout2.css">
<title>Ajout</title>
<h1>Ajouter les mesures</h1>
<form id="" name="" method="POST">
	<div id="bloc">
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
	</div>

	<div id="button">
		<button type="submit" class="btn retour" name="Retour" id=""><a href="ajout_recette1.php">< Retour</a></button>
		<button type="submit" class="btn suivant" name="Suivant" id=""><a href="ajout_recette3.php">Suivant ></a></button>
	</div>
</form>				

<?php
	include 'footer.php';
?>