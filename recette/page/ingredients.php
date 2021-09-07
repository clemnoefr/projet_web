<?php
	include 'header.php';

	//si n'est pas (!=) admin ou (||) user.
	if ($_SESSION['role'] != 'admin' || $_SESSION['role'] != 'user'){
		header('Location: index.php');
	}

?><title>Ingrédients</title>

	<link rel="stylesheet" type="text/css" href="../style/style_voir_liste.css">

	<h1>Ingrédients</h1>
	<ul>
		<li>farine</li>
		<li>eau</li>
	</ul>

	<div id="retour">
		<a href="liste_course.php">Retour</a>   
	</div>

<?php
	include 'footer.php';
?>