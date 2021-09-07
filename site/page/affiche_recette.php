<?php
	include 'header.php';

	$url = "http://localhost/dev_web/api/recettes.php?ID_recette=".$_GET["ID_recette"];
	$raw = file_get_contents($url);
	$json = json_decode($raw);
	
?><title></title>
<link rel="stylesheet" type="text/css" href="../style/style_affiche_recette.css">

	<div>
		<h1 id="titre"><?= $json->nom_recette;?></h1>
		<div id="separateur"></div>
	</div>

	<div id="partage">
		<a target="_blank" title="Envoyer par mail" href="mailto:?Graphique température/humidité&amp;Body=Graphique%20température%20/%20humidité%20 " rel="nofollow">
			<i class="bi bi-envelope"></i>
		</a>
	</div>

	<div id="pdf">
		<p>PDF</p>
	</div>

	<?php 
	if($_SESSION["role"]=="admin" || $_SESSION["ID_user"]==$json->ID_user){
		echo '<div id="modifier">	<button><a href="">Modifier</a></button></div><div id="supprimer"><button><a href="">Supprimer</a></button></div>';
	}
	?>

	<i class="bi bi-file-earmark-pdf"></i>

	<div id="contenue">
		<div id="contenue1">
			<div id="img">
				<img src="../images/<?= $json->image;?>">
				<img src="../images/saumon.jpg">
			</div>

			<p id="personne"><strong>Pour <?= $json->nombre_personne;?> personnes</strong></p>
			<p id="personne"><strong><?= $json->duree_recette;?> minutes de préparation</strong></p>
			
			<div id="bloc">
				<h1><strong>Ingrédients</strong></h1>
				<span><i class="bi bi-plus-circle-fill"></i> Liste de course</span>
				
				
			</div>
			<div id="bloc2">
				<div id="ingredient">
					<p><?= $json->liste_ingredients;?></p>			
				</div>
				
			</div>
			<h1><strong>Ustensiles</strong></h1>
			<div>
					<p><?= $json->liste_ustensiles;?></p>
				</div>
			
			
		</div>
		<div id="contenue2">
			<h1>Préparation</h1>
			<p><?= $json->recette_texte;?></p>
		</div>
	</div>
	
<?php
	include 'footer.php';
?>