<?php
include("controller/RecetteController.php");
//use \UserController;
$recette = new RecetteController;



$json = file_get_contents('php://input');
$request=json_decode($json, true);


if($_SERVER['REQUEST_METHOD']=='POST'){
    $recette->insert($request);
    $response=json_encode("Recette crée avec succès");
    echo $response;

}else{echo"TG";}