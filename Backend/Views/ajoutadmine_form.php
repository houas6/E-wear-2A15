<?php
   include_once '../Model/Admin.php';
    include_once '../Controller/Admin.php';
    $error = "";
    $Admin = null;

    // create an instance of the controller
    $AdminController = new AdminController();
    if (
		isset($_POST["name"]) &&		
        isset($_POST["email"]) &&
		isset($_POST["pass"]) &&
        isset($_POST["adresse"]) && 
        isset($_POST["categorie"])
    ) {
        if (
			!empty($_POST['name']) &&
            !empty($_POST["email"]) && 
			!empty($_POST["pass"]) &&
            !empty($_POST["adresse"]) && 
            !empty($_POST["categorie"])
        ) {
            $Admin = new Admin(
				$_POST['name'],
                $_POST['email'],
                $_POST['pass'],
                $_POST['adresse'],
                $_POST['categorie'],
            );
            $AdminController->addAdminB($Admin);
            var_dump($Admin);
           header('Location:table-admin.php');
        }
        else
            $error = "Missing information";
            echo $error;
    }
    var_dump($_POST);
    
?>
