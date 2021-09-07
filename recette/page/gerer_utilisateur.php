<?php
	include 'header.php';

    //si n'est pas (!=) admin
    if ($_SESSION['role'] != 'admin'){
        header('Location: index.php');
    }
?><title>Utilisateur</title>
	
	<link rel="stylesheet" type="text/css" href="../style/style_recette_liste">

	<h1>Les utilisateurs</h1>
	<div class="table-responsive-sm">
	<table class="table table-sm table-hover">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mail</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Dupont</td>
            <td>Frank</td>
            <td>frankdupont@gmail.com</td>
            <td>
            	<a href=""class="text-danger">PDF<span>Télécharger</span></a>
				<a href=""><i class="bi bi-trash btn-lg text-warning"></i><span>Supprimé</span></a>
			</td>
        </tr>
    </tbody>
</table>
</div>

<div id="retour">
	<a href="dashboard.php">Retour</a>   
</div>

<?php
	include 'footer.php';
?>