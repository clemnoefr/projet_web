<?php 

    class Database{ 
        private $pdo;
        public function __construct()
        {
            try{
                $connexion = new PDO("mysql:host=localhost;dbname=recettes;charset=utf8;","root");
                $this->pdo=$connexion;
            }catch (PDOException $e){
                print "Erreur !: " .$e->getMessage(). "<br>";
            exit;
            }
            return $this->pdo;
        }
    }
?>