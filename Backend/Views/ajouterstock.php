<?php
   include_once '../Model/stock.php';
    include_once '../Controller/stock.php';
    $error = "";
    $stock = null;

    // create an instance of the controller
    $stock = new stockController();
    if (
        isset($_POST["dispo"]) &&
		isset($_POST["nbrarticle"]) &&		
        isset($_POST["datearr"]) 
		
    ) {
        if (
            !empty($_POST["dispo"]) && 
			!empty($_POST['nbrarticle']) &&
            !empty($_POST["datearr"]) 
			
        ) {
            $stock = new stock(
                $_POST['dispo'],
				$_POST['nbrarticle'],
                $_POST['datearr']
               
            );
            $stock->addstock($stock);
           header('Location:table-stock.php');
        }
        else
            $error = "Missing information";
            echo $error;
    }
    var_dump($_POST);
    
?>
