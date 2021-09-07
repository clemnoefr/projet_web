<?php
	include 'header.php';

	//si n'est pas (!=) user
	if ($_SESSION['role'] != 'user'){
		header('Location: index.php');
	}
	
?><link rel="stylesheet" type="text/css" href="../style/style_compte_admin.css">
<title>Mon compte</title>

<h1>Mon compte</h1>
<div id="bloc">
	<div id="contenue1">
		<a href="mes_recettes.php">Mes recettes</a><br>
		<a href="liste_course.php">Mes liste de courses</a><br>
		<a href="update_compte.php">Modifier mon compte</a>
	</div>

	<div class="number">
		<span><strong>23</strong></span><br>
		<p>Recettes crées</p>
	</div>

	<div class="number">
		<span><strong>6</strong></span><br>
		<p>Listes de courses</p>
	</div>
</div>
	
<?php
	include 'footer.php';
?>