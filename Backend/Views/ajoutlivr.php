<?php 
include '../controller/livreurC.php';
require_once '../model/livreur.php';
// create an instance of the controller
$livreurC = new livreurC();
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
	$livreur = new livreur(0,"s","a",0);
	$livreur->setNom($nom);
	$livreur->setPrenom($prenom);
	$livreur->setTel($tel);
	$livreurC->ajouterlivreur($livreur);
		header('Location:ajoutlivreur.php');

?>