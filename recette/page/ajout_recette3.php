<?php
	include 'header.php';
?><title>Ajouter</title>

<div id="bloc">
	<form method="POST">
		<h1>Ajouter la préparation</h1>
		
		<div>
			<label for="" class="form-label mt-3">Praparation de la recette</label><br>
			<textarea value="" id="" name="" rows="15" cols="60" class="form-control mb-3"></textarea>
		</div>

		<div id="button">
			<button type="submit" class="btn retour" name="Retour" id=""><a href="ajout_recette2.php">< Retour</a></button>
			<button type="submit" class="btn ajouter" name="Ajouter" id="">Ajouter</button>
		</div>
	</form>
</div>

<style type="text/css">


h1{
	font-size: 46px;
	text-align: center;
	color: #3d3c3c;
	margin-bottom: 20px;
}
div#bloc{
	display: flex;
	flex-direction: column;
	text-align: center;
	width: 45%;
	margin: auto;
	color: #3d3c3c;
}
div#bloc label{
	font-size: 20px;
}
div#button{
	display: flex;
	flex-direction: row;
	width: 100%;
}
div#button button.btn a{
	text-decoration: none;
	color: white;
	font-size: 20px;
}
div#button button.btn{
	display: block;
	margin: auto;
	background-color: #07a82e;
	margin-top: 25px;
}
div#button button{
	margin-bottom: 20px;
}
div#button button.retour{
	margin-right: 25px;
}
div#button button.ajouter{
	margin-left: 25px;
	font-size: 20px;
	color: white;
	margin-left: 10px;
}
#footer{
	position: relative;
	padding-top: 30px;
}
@media all and (max-width: 1024px){
	
	div#bloc{
	width: 50%;
	}
	div#button{
		margin-top: -25px;
	}
	div#button button.retour{
		margin-right: 10px;
	}
}
</style>
<?php
	include 'footer.php';
?>