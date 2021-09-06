<?php 

include("C:\\xampp\htdocs\dev_web\modele\User.php");
//use \User;


class UserController{
    public function insert($data){
        
        $user = new User();
        $user->createUser($data);
    }

    public function insert($data){
        
        $user = new User();
        $user->createUser($data);
    }
}