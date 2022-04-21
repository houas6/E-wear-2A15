<?php 
include '../controller/livraisonC.php';
require_once '../model/livraison.php';
// create an instance of the controller
$livraisonC = new livraisonC();
    $adresse = $_POST['adresse'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
    $tel = $_POST['tel']
	$mail = $_POST['mail'];
	$frais = $_POST['frais'];
	$livraison = new livraison();
	$livraison->setAdresse($adresse);
	$livraison->setNom($nom);
	$livraison->setPrenom($prenom);
	$livraison->setTel($tel);
	$livraison->setMail($mail);
	$livraison->setFrais($frais);


	

	// Database connection
    $conn = new mysqli('localhost','root','','livraison');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$livraisonC->ajouterlivraison($livraison);
	
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

?>