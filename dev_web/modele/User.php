<?php 

include("database.php");

    class User extends Database{
            private $pdo;
        public function __construct()
        {
            $this->pdo = parent::__construct();
            return $this->pdo;
        }
        public function createUser($user)
        {
           
            $insert = $this->pdo->prepare("INSERT INTO users(mail, prenom, nom, mdp, role, token, compte_actif) VALUES (:mail, :prenom, :nom, :mdp, :role, :token, :compte_actif)");
            $insert->bindValue(":mail", $user["mail"], PDO::PARAM_STR);
            $insert->bindValue(":prenom", $user["prenom"], PDO::PARAM_STR);
            $insert->bindValue(":nom", $user["nom"], PDO::PARAM_STR);
            $insert->bindValue(":mdp", $user["mdp"], PDO::PARAM_STR);
            $insert->bindValue(":role", $user["role"], PDO::PARAM_STR);
            $insert->bindValue(":token", $user["token"], PDO::PARAM_STR);
            $insert->bindValue(":compte_actif", $user["compte_actif"], PDO::PARAM_INT);
            
            if (!$insert->execute()){
                return false;
            }return true;
        }
    }
?>