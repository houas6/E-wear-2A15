<?php
    @session_start();
    include_once '../../Model/User.php';
    include_once '../../Controller/User.php';
    $error = "";
    $User = null;

    // create an instance of the controller
    $UserController = new UserController();
    if (isset($_POST["name"]) &&		      
		isset($_POST["adresse"]) && 
        isset($_POST["email"]) && 
        isset($_POST["pass"])
    ) {
        if (!empty($_POST['name']) &&
			!empty($_POST["adresse"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["pass"])
        ) {
            $User = new User(
                $_SESSION['ID'],
				$_POST['name'],
                $_POST['email'],
				$_POST['adresse'],
                $_POST['pass']
            );
            $UserController->UpdateUser($User);
            header('Location:logout.php');
        }
        else
            $error = "Missing information";
            echo $error;
    }

    
?>