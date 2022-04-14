<?php
    include_once '../Model/reclamationn.php';
    include_once '../Controller/reclamation.php';
    $error = "";
    $reclamation = null;

    // create an instance of the controller
   
    $reclamationController = new reclamationController();
    if (
       
		isset($_POST["nomR"]) &&		
    isset($_POST["prenomR"]) &&	
        isset($_POST["mail"]) &&
		isset($_POST["rec"]) 
        
    ) {
        if (
         
			!empty($_POST['nomR']) &&
            !empty($_POST["prenomR"]) && 
			!empty($_POST["email"]) && 
            !empty($_POST["rec"]) 
            
        ) {
            $reclamation = new reclamation(
              
              $_POST["nomR"],
              $_POST["prenomR"],
              $_POST["email"],
              $_POST["rec"],
              
            );
            $reclamationController->ajouterreclamtionn($reclamation);
            var_dump($reclamation);

            
        }
        else
            $error = "Missing information";
          //  var_dump($error);
            echo $error;
    }
?>