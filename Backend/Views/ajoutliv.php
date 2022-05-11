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
	$id_livreur= $_POST['id_livreur'];
	$livraison = new livraison(0,"s","a","s","a",0,0,0);
	$livraison->setAdresse($adresse);
	$livraison->setNom($nom);
	$livraison->setPrenom($prenom);
	$livraison->setTel($tel);
	$livraison->setMail($mail);
	$livraison->setFrais($frais);
	$livraison->setid_livreur($id_livreur);

	$livraisonC->ajouterlivraison($livraison);
	//mailing
$to_email = $_POST['mail'];
$subject = "Confirmation de livraison";
$body = "Une livraison a été ajoutée sous votre nom: ".$nom." ".$prenom." qui sera délivrée à votre addresse ".$adresse;
$headers = "";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
		header('Location:ajoutlivraison.php');

?>