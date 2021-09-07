<?php
session_start();

if($_SESSION["role"]=="admin" || $_SESSION["role"]=="user"{

	$url = "lien API".$_GET["id_user"]."";
	$raw = file_get_contents($url);
	$json = json_decode($raw);
}
$_SESSION["recettes"]=$json;