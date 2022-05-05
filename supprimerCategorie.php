<?php
	include '../Controller/CategorieController.php';
	$categorieC=new CategorieController();
	$categorieC->supprimerCategorie($_GET["id"]);
	header('Location:afficherCategorieB.php');
?>
