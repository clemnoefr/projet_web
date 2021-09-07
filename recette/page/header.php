<?php
	session_start();
?><!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" type="text/css" href="../style/style_header.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
  		<div class="container-fluid">
		    <a class="navbar-brand" href="index.php">Recette Gourmande</a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<i class="bi bi-list"></i>
			    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        	<li class="nav-item dropdown">
		          		<a class=" navbar dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Les recettes</a>
			          		<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
			          			<li><a class="dropdown-item" href="entree.php">Entrée</a></li><!--target="_blank"-->
					            <li><a class="dropdown-item" href="plat.php">Plat</a></li><!--target="_blank"-->
					            <li><a class="dropdown-item" href="dessert.php">Dessert</a></li><!--target="_blank"-->
					        </ul>
					</li>
					<li class="nav-item">
		          		<a class="navbar" aria-current="page" href="ingredients.php">Ingrédients</a>
		        	</li>
		        	<!--<?php
		        		/*if ($_SESSION['ID_user']){
		        			echo'<li class="nav-item">
		          					<a class="navbar" aria-current="page" href="ajout_recette.php">Ajouter recette</a>
		        				</li>';
		        		}*/
		        	?>-->
		        	<li class="nav-item">
		          		<a class="navbar" aria-current="page" href="ajout_recette.php">Ajouter recette</a>
		        	</li>
		        	<!--<?php
		        		/*if (){
		        			echo'<li class="nav-item">
		          					<a class="navbar" aria-current="page" href="inscription.php">Inscription</a>
		        				</li>';
		        		}*/
		        	?>-->
					<li class="nav-item">
		          		<a class="navbar" aria-current="page" href="inscription.php">Inscription</a>
		        	</li>
		        	<!--<?php
		        		/*if ($_SESSION['ID_user'] AND $_SESSION['role'] == 'admin'){
		        			echo'<li class="nav-item">
		          					<a class="navbar" aria-current="page" href="dashbord.php">Dashbord</a>
		        				</li>';
		        		}
			        	elseif($_SESSION['ID_user'] AND $_SESSION['role'] == 'user'){
			        		echo'<li class="nav-item">
			          				<a class="navbar" aria-current="page" href="mon_compte.php">Mon compte</a>
			        			</li>';
						}
						else{
							echo '<li class="nav-item">
		          					<a class="navbar" aria-current="page" href="connexion.php">Connexion</a>
		        				</li>';
						}*/
					?>-->
		        	<li class="nav-item">
		          		<a class="navbar" aria-current="page" href="connexion.php">Connexion</a>
		        	</li>
		        	
			    </ul>
		    </div>
    	</div>
	</nav>
