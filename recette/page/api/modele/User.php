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
            $mdp=hash($user["mdp"],PASSWORD_DEFAULT);
            $insert = $this->pdo->prepare("INSERT INTO users(mail, prenom, nom, mdp, role, token, compte_actif) VALUES (:mail, :prenom, :nom, :mdp, :role, :token, :compte_actif)");
            $insert->bindValue(":mail", $user["mail"], PDO::PARAM_STR);
            $insert->bindValue(":prenom", $user["prenom"], PDO::PARAM_STR);
            $insert->bindValue(":nom", $user["nom"], PDO::PARAM_STR);
            $insert->bindValue(":mdp", $mdp, PDO::PARAM_STR);
            $insert->bindValue(":role", $user["role"], PDO::PARAM_STR);
            $insert->bindValue(":token", $user["token"], PDO::PARAM_STR);
            $insert->bindValue(":compte_actif", $user["compte_actif"], PDO::PARAM_INT);
            
            if (!$insert->execute()){
                return false;
            }return true;
        }
        public function getUser($data){
            $sql="SELECT * FROM users WHERE ID_user=:id";
            $query=$this->pdo->prepare($sql);
            $query->execute(['id'=>$data]);
            $result = $query->fetch();
            return $result;
        }
        public function GetAllUsers(){

            $recup="SELECT * FROM users";
            $titi = $this->pdo->prepare($recup);
            $titi->execute();
            $result = $titi->fetchAll();
            
            return $result;
        }
    }
?>