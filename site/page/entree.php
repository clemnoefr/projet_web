<?php
	include 'header.php';
?><title>Entrées</title>
<link rel="stylesheet" type="text/css" href="../style/style_recette.css">

	<div>
		<h1>Entrées</h1>
		<div id="separateur"></div>
	</div>
	<!--foreach
	recette.php?ID_recette=<?= $recette->ID_recette; ?>-->

	<?php
		$url = "http://localhost/dev_web/api/recettes.php?categorie=ent";
		$raw = file_get_contents($url);
		$json = json_decode($raw);
				
	?>
	<div id="photo">
		<?php
			foreach($json as $value){
				echo '<div>
				<a href="affiche_recette.php?ID_recette='.$value->ID_recette.'" target="blank"><img src="../images/'.$value->image.'" alt="">
				<h2><strong>'.$value->nom_recette .'</strong></h2></a>
			</div>';
			}
		?>
		
		

		
		
	</div>

<!--<style type="text/css">
	#footer{
		position: relative;
	}
</style>-->

<?php
	include 'footer.php';
?>