<?php 

include("C:\\xampp\htdocs\dev_web\modele\Recette.php");
//use \User;


class RecetteController{
    public function insert($data){
        
        $recette = new Recette();
        $recette->createRecette($data);
    }
    public function recup(){
         
        $recette = new Recette();
        return $recette->GetAllRecette();
    }
    public function recupOne($data){
        $recette = new Recette();
        return $recette->GetOneRecette($data);
    }
    public function recupUser($data){
        $recette=new Recette();
        return $recette->GetUserRecette($data);
    }
    
}