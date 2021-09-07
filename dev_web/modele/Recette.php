<?php 

include("database.php");

    class Recette extends Database{
            private $pdo;
        public function __construct()
        {
            $this->pdo = parent::__construct();
            return $this->pdo;
        }


        public function createRecette($recette){

        
                    // insertion recette dans la table recette
                    $nom_recette = htmlspecialchars($recette['nom_recette']);
                    $duree_recette = floatval($recette['duree_recette']);
                    //$image_prix = implode($_FILES['image_prix']);
                    //$image_difficulte = implode($_FILES['image_difficulte']);
                    $categorie_recette = htmlspecialchars($recette['categorie_recette']);
                    //$image = implode($_FILES['image']);
                    $recette_texte = htmlspecialchars($recette['recette_texte']);
                    $ID_user = intval($recette['ID_user']);
                    $nombre_personne = intval($recette['nombre_personne']);
                    $liste_ingredient = htmlspecialchars($recette['liste_ingredient']);
                    $liste_ustensile = htmlspecialchars($recette['liste_ustensile']);

        

                        /*$image_prix = $_FILES['image_prix']['name'];
                        $time_prix = date("d-m-y")."-".time();
                        $time_name_prix = $time_prix."-".$image_prix;
                        $upload_prix = $_SERVER['DOCUMENT_ROOT']."/chemin du dossier/".$time_name_prix;
                            //déplacer un fichier téléchargé
                            move_uploaded_file($_FILES['image_prix']['tmp_name'], $upload_prix);

        

                        $image_difficulte = $_FILES['image_difficulte']['name'];
                        $time_difficulte = date("d-m-y")."-".time();
                        $time_name_difficulte = $time_difficulte."-".$image_difficulte;
                        $upload_difficulte = $_SERVER['DOCUMENT_ROOT']."/chemin du dossier/".$time_name_difficulte;
                            //déplacer un fichier téléchargé
                            move_uploaded_file($_FILES['image_difficulte']['tmp_name'], $upload_difficulte);

        

                        $image = $_FILES['image']['name'];
                        $time = date("d-m-y")."-".time();
                        $time_name = $time."-".$image;
                        $upload = $_SERVER['DOCUMENT_ROOT']."/chemin du dossier/".$time_name;
                            //déplacer un fichier téléchargé
                            move_uploaded_file($_FILES['image']['tmp_name'], $upload);*/

        
                    $time_name_prix='toto';
                    $time_name_difficulte='titi';
                    $image='tata';
                    $sql = "INSERT INTO Recettes (nom_recette, duree_recette, image_prix, image_difficulte, categorie_recette, image, recette_texte, ID_user, nombre_personne, liste_ingredient, liste_ustensile) VALUES (:nom_recette, :duree_recette, :image_prix, :image_difficulte, :categorie_recette, :image, :recette_texte, :ID_user, :nombre_personne, :liste_ingredient, :liste_ustensile);";

        

                    $query = $this->pdo->prepare($sql);

        

                    $query->bindValue(':nom_recette', $nom_recette, PDO::PARAM_STR);
                    $query->bindValue(':duree_recette', $duree_recette, PDO::PARAM_INT);
                    $query->bindValue(':image_prix', $time_name_prix, PDO::PARAM_STR);
                    $query->bindValue(':image_difficulte', $time_name_difficulte, PDO::PARAM_STR);
                    $query->bindValue(':categorie_recette', $categorie_recette, PDO::PARAM_STR);
                    $query->bindValue(':image', $image, PDO::PARAM_STR);
                    $query->bindValue(':recette_texte', $recette_texte, PDO::PARAM_STR);
                    $query->bindValue(':ID_user', $ID_user, PDO::PARAM_INT);
                    $query->bindValue(':nombre_personne', $nombre_personne, PDO::PARAM_INT);
                    $query->bindValue(':liste_ingredient', $liste_ingredient, PDO::PARAM_STR);
                    $query->bindValue(':liste_ustensile', $liste_ustensile, PDO::PARAM_STR);
                    $query->execute();
                   
                   
                }

        public function GetAllRecette(){

            $recup="SELECT * FROM recettes";
            $titi = $this->pdo->prepare($recup);
            $titi->execute();
            $result = $titi->fetchAll();
            
            return $result;
        }
        public function GetOneRecette($id){
            

            $sql="SELECT * FROM recettes WHERE ID_recette=:id";
            $query=$this->pdo->prepare($sql);
            $query->execute(['id'=> $id]);
            $result = $query->fetch();
            return $result;
        }
        public function GetUserRecette($id){
            $sql="SELECT * FROM recettes WHERE ID_user=:id";
            $query=$this->pdo->prepare($sql);
            $query->execute(['id'=> $id]);
            $result = $query->fetchAll();
            return $result;
        }
     } 
?>