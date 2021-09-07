<?php
	include 'header.php';

    //si n'est pas (!=) admin.
    if ($_SESSION['role'] != 'admin'){
        header('Location: index.php');
    }
    $url = "http://localhost/dev_web/api/recettes.php";
	$raw = file_get_contents($url);
	$json = json_decode($raw);
?><title>Les recettes</title>
	
	<link rel="stylesheet" type="text/css" href="../style/style_recette_liste">
	
	<h1>Les recettes</h1>
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
        
        <?php
			foreach($json as $value){
				echo '<tr><td>'.$value->nom_recette.'</td>
                <td>'.$value->categorie_recette.'</td>
                <td>'.$value->date_creation_recette.'/td>
                <td>
                    <a href=""class="text-danger">PDF<span>Télécharger</span></a>
                    <a href="affiche_recette.php?ID_recette='.$value->ID_recette.'"><i class="bi bi-binoculars btn-lg text-sucess"></i><span>Voir recette</span></a>
                    <a href="update_recette.php"><i class="bi bi-pencil-square  btn-lg text-success"></i><span>Modifié</span></a>
                    <a href="delete.php"><i class="bi bi-trash btn-lg text-warning"></i><span>Supprimé</span></a>
                </td></tr>';
			}
		?>
           
        
    </tbody>
</table>
</div>

<div id="retour">
    <a href="dashboard.php">Retour</a>   
</div>

<i class="bi bi-file-earmark-pdf text-primary"></i>
<i class="bi bi-file-earmark-pdf-fill text-primary"></i>
<i class="bi bi-file-pdf"></i>

<i class="far fa-file-pdf"></i>
<i class="fa fa-file-pdf-o" aria-hidden="true"></i>

<?php
	include 'footer.php';
?>