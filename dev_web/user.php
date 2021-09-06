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

}else{echo"TG";}