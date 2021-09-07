<?php
	include 'header.php';

    //si n'est pas (!=) user.
    if ($_SESSION['role'] != 'user'){
        header('Location: index.php');
    }
?><title>Mes recettes</title>
	
	<link rel="stylesheet" type="text/css" href="../style/style_recette_liste">
	
	<h1>Mes recettes</h1>
	<div class="table-responsive-sm">
	<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th>Recette</th>
            <th>Catégorie</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Gâteauxhdjhfjhdjdfghjhkkkkkkkkkkkkkkkkkkkk</td>
            <td>dessert</td>
            <td>00/00/0000</td>
            <td>
            	<a href=""class="text-danger">PDF<span>Télécharger</span></a>
            	<a href="affiche_recette.php"><i class="bi bi-binoculars btn-lg text-sucess"></i><span>Voir recette</span></a>
				<a href="update_recette.php"><i class="bi bi-pencil-square  btn-lg text-success"></i><span>Modifié</span></a>
				<a href="delete.php"><i class="bi bi-trash btn-lg text-warning"></i><span>Supprimé</span></a>
			</td>
        </tr>
        <tr>
            <td>Gâteaux</td>
            <td>dessert</td>
            <td>00/00/0000</td>
            <td>
            	<a href=""class="text-danger">PDF<span>Télécharger</span></a>
            	<a href=""><i class="bi bi-binoculars btn-lg text-sucess"></i><span>Voir recette</span></a>
				<a href=""><i class="bi bi-pencil-square  btn-lg text-success"></i><span>Modifié</span></a>
				<a href=""><i class="bi bi-trash btn-lg text-warning"></i><span>Supprimé</span></a>
			</td>
        </tr>
    </tbody>
</table>
</div>

<div id="retour">
    <a href="mon_compte.php">Retour</a>   
</div>

<i class="bi bi-file-earmark-pdf text-primary"></i>
<i class="bi bi-file-earmark-pdf-fill text-primary"></i>
<i class="bi bi-file-pdf"></i>

<i class="far fa-file-pdf"></i>
<i class="fa fa-file-pdf-o" aria-hidden="true"></i>

<?php
	include 'footer.php';
?>