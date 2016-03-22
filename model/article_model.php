<?php
try{
	$bdd = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
}catch(Exception $e){
	die('Afficher l\'erreur : '.$e->getMessage() );
}

$reponse = $bdd->query('SELECT * FROM article');
$reponse = $reponse->fetchAll();

