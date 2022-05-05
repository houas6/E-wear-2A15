<?php 
include '../controller/livraisonC.php';
require_once '../model/livraison.php';
// create an instance of the controller
$livraisonC = new livraisonC();
    $adresse = $_POST['adresse'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
	$mail = $_POST['mail'];
	$frais = $_POST['frais'];
	$livraison = new livraison(0,"s","a","s","a",0,0);
	$livraison->setAdresse($adresse);
	$livraison->setNom($nom);
	$livraison->setPrenom($prenom);
	$livraison->setTel($tel);
	$livraison->setMail($mail);
	$livraison->setFrais($frais);


	


		$livraisonC->ajouterlivraison($livraison);
	
		echo "Registration successful...";

?>