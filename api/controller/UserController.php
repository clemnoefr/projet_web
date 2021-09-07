<?php 

include("C:\\xampp\htdocs\dev_web\api\modele\User.php");
//use \User;


class UserController{
    public function insert($data){
        
        $user = new User();
        $user->createUser($data);
    }

    public function getUser($data){
        
        $user = new User();
       return $user->getUser($data);
    }
    public function GetAllUsers(){
         
        $user = new User();
        return $user->GetAllUsers();
    }
}