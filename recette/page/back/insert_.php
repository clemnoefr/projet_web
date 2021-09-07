<?php
session_start();

if($_SESSION["role"]=="admin" || $_SESSION["id_user"]==$_GET["id_createur"]){

	$url = "lien API".$_GET["id_recette"]."";
	$raw = file_get_contents($url);
	$json = json_decode($raw);
}
$_SESSION["recettes"]=$json;