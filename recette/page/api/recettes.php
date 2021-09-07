<?php
include("controller/RecetteController.php");
//use \UserController;
$recette = new RecetteController;



$json = file_get_contents('php://input');
$request=json_decode($json, true);



if($_SERVER['REQUEST_METHOD']=='POST'){
    // verif si utilisateur est connecté
    if($_POST["id_user"]){
    $recette->insert($request);
    $response=json_encode("Recette crée avec succès");
    echo $response;
    }else{
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }

}elseif($_SERVER['REQUEST_METHOD']=='GET' && empty($_GET)){
    
    $response=json_encode($recette->recup());
    echo $response;

}elseif($_SERVER['REQUEST_METHOD']=='GET' && !isset($_GET["ID_user"]) && isset($_GET["ID_recette"])){
    
    $response=json_encode($recette->recupOne($_GET["ID_recette"]));
    echo $response;
    
}elseif($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET["ID_user"]) && !isset($_GET["ID_recette"])){

    $response=json_encode($recette->recupUser($_GET["ID_user"]));
    echo $response;

}else{echo"TG";}

