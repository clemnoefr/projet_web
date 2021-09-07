<?php
session_start();

if($_SESSION["role"]=="admin" || $_SESSION["id_user"]{

	$url = "lien API".$_GET["id_ingredient"]."";
	$raw = file_get_contents($url);
	$json = json_decode($raw);
}
$_SESSION["recettes"]=$json;