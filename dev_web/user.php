<?php
include("controller/UserController.php");
//use \UserController;
$user = new UserController;



$json = file_get_contents('php://input');
$request=json_decode($json, true);


if($_SERVER['REQUEST_METHOD']=='POST'){
    $user->insert($request);
    $response=json_encode("toto");
    echo $response;

}elseif($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET["ID_user"])){

    $response=json_encode($user->getUser($_GET["ID_user"]));
    echo $response;

}elseif($_SERVER['REQUEST_METHOD']=='GET' && empty($_GET["ID_user"])){

    $response=json_encode($user->GetAllUsers());
    echo $response;

}else{echo"TG";}