<?php
	include 'header.php';
?><title></title>
<link rel="stylesheet" type="text/css" href="../style/style_affiche_recette.css">

	<div>
		<h1 id="titre">Gâteaux</h1>
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
	/*if($_SESSION["role"]=="admin" || $_SESSION["id"]==$id_createur){
		echo '<div id="modifier">	<button><a href="">Modifier</a></button></div><div id="supprimer"><button><a href="">Supprimer</a></button></div>';
	}*/
	?>
	<div id="modifier">	<button><a href="">Modifier</a></button></div><div id="supprimer"><button><a href="">Supprimer</a></button></div>
	<i class="bi bi-file-earmark-pdf"></i>

	<div id="contenue">
		<div id="contenue1">
			<div id="img">
				<img src="../images/gateaux">
			</div>

			<p id="personne"><strong>Pour 8 personnes</strong></p>
			<p id="personne"><strong>1h00 de préparation</strong></p>
			
			<div id="bloc">
				<h1><strong>Ingrédients</strong></h1>
				<span><i class="bi bi-plus-circle-fill"></i> Liste de course</span>
			</div>
			<div id="ingredient">
			<p>fjkfjk 20g</p>
			<p>fjkfjk 20g</p>
			<p>fjkfjk 20g</p>
			<p>fjkfjk 20g</p>
		</div>
		</div>
		<div id="contenue2">
			<h1>Préparation</h1>
			<p>ssssssssdfghkljmkù,y gcfghjklsmdfkjglfd;nw,nbvfdnskfdskqbdfjksljfjjjj
			hshdsbhljsqhdfjhfjmjsdfksjkkqjlkqjqjgjfnjnfjjfhhfgjjgqhjhgjhgfhjdjkkkqfj
			jdsfhjmhfmqffngjndjgnjdngjdjfngjdnjnjngjndfjnjfdndjgnfdjdngjgnfgf.
			kdfngfngjnfjgnjfngjnfgjnfjgngjnfgjngjngdngjsdns,fnv,nvns,,,ms
			gkjdgkgnksnmqdmqjlhjqmfhgjmfhnjmbnjfnbjbnmqbjq
			jfqnqjnjnqjnqjnqjnbmqbqmnbmbq
			qbnjbqnjqblnqblqbùqkjbnjbjbjnqjmkqb
			qbjnqbjkbqvdl</p>
		</div>
	</div>
	
<?php
	include 'footer.php';
?>