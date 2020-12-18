<?php
try{
	$basededonnees = new PDO("mysql:host=localhost;dbname=m2l", "root", "");
}catch(PDOException $e){
	echo 'Connexion impossible à la base de données';
}
?>
