<?php 

// create livraison
$livraisonController = null;

// create an instance of the controller
$livraisonController = new livraisonController();

    $adresse = $_POST['adresse'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
    $tel = $_POST['tel']
	$mail = $_POST['mail'];
	$frais = $_POST['frais'];
	

	// Database connection
    $conn = new mysqli('localhost','root','','livraison');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into livraison (adresse , nom, prenom , tel , mail , frais) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssisi", $adresse , $nom, $prenom , $tel , $mail , $frais);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

?>