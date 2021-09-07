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
            $recup="SELECT * FROM users";
            $titi = $this->pdo->prepare($recup);
            $titi->execute();
            $result = $titi->fetchAll();
            
            $mdp=password_hash($user["mdp"],PASSWORD_DEFAULT);

           $token="pas_encore_mais_bientôt";

            if(empty($result)){
                $role="admin";
            }else{$role="user";}
            $insert = $this->pdo->prepare("INSERT INTO users(mail, prenom, nom, mdp, role, token, compte_actif) VALUES (:mail, :prenom, :nom, :mdp, :role, :token, :compte_actif)");
            $insert->bindValue(":mail", $user["mail"], PDO::PARAM_STR);
            $insert->bindValue(":prenom", $user["prenom"], PDO::PARAM_STR);
            $insert->bindValue(":nom", $user["nom"], PDO::PARAM_STR);
            $insert->bindValue(":mdp", $mdp, PDO::PARAM_STR);
            $insert->bindValue(":role", $role, PDO::PARAM_STR);
            $insert->bindValue(":token", $token, PDO::PARAM_STR);
            $insert->bindValue(":compte_actif", "true", PDO::PARAM_INT);
            
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