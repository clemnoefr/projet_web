<?php
echo "toto";
var_dump($_POST);
	if(isset($_POST['email']) && !empty($_POST['email'])
		&& isset($_POST['password']) && !empty($_POST['password'])){
			echo "tat";
			$url = "http://localhost/projet/moi/recette/page/api/user.php";
			$raw = file_get_contents($url);
			$json = json_decode($raw);
			var_dump($json);
			$passwordVerif = password_verify($_POST['mdp'], $result['mdp']);

			    if ($passwordVerif ) {
			        session_start();
			        $_SESSION['ID_user'] = $result['ID_user'];
			        $_SESSION['role'] = $result['role'];
			       
			       	//header('Location: mon_compte.php')				
			    }
	}

