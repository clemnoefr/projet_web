<?php
	include 'header.php';

	//si n'est pas (!=) admin
	if ($_SESSION['role'] != 'admin'){
		header('Location: index.php');
	}

?><link rel="stylesheet" type="text/css" href="../style/style_compte_admin.css">
<title>Dashboard</title>

<h1>Dashboard</h1>
<div id="bloc">
	<div id="contenue1">
		<a href="les_recettes.php">Gérer les recette</a><br>
		<a href="gerer_utilisateur.php">Gérer les utilisateurs</a><br>
		<a href="update_compte2.php">Modifier mon compte</a>
	</div>

	<div class="number">
		<span><strong>150</strong></span><br>
		<p>Utilisateurs</p>
	</div>

	<div class="number">
		<span><strong>123</strong></span><br>
		<p>Recettes crées au total</p>
	</div>
</div>
	
<?php
	include 'footer.php';
?>