<?php
	include '../Controller/ProduitController.php';
	$categorieC=new ProduitController();
	$categorieC->supprimerProduit($_GET["id"]);
	header('Location:afficherProduitB.php');
?>
