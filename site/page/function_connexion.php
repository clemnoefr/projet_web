<?php

	if(isset($_POST['email']) && !empty($_POST['email'])
		&& isset($_POST['password']) && !empty($_POST['password'])){
			
			$url = "http://localhost/dev_web/api/user.php";
			$raw = file_get_contents($url);
			$json = json_decode($raw);
			
			foreach($json as $value){
				
				
				if($_POST["email"]==$value->mail && password_verify($_POST['password'], $value->mdp)){
					session_start();
			        $_SESSION['ID_user'] = $value->ID_user;
			        $_SESSION['role'] = $value->role;
					header('Location: mon_compte.php');	
				}else{echo "rate";}
			}
		}

