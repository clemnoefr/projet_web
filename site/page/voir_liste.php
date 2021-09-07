<?php
	include 'header.php';
	//si n'est pas (!=) user.
	if ($_SESSION['role'] != 'user'){
		header('Location: index.php');
	}

?><title>Liste course</title>

	<link rel="stylesheet" type="text/css" href="../style/style_voir_liste.css">

	<h1>Liste de course pour: </h1>
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