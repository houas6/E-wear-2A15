<?php
    include_once '../Model/commande.php';
    include_once '../Controller/commandeC.php';

    

    $error = "";

    // create commande
    $commande = NULL;

    // create an instance of the controller
    $commandeC = new commandeC();
      if (
                //isset($_POST["idCom"]) &&
                isset($_POST["nom"]) &&
		        isset($_POST["telephone"]) && 
                isset($_POST["adresse"]) && 
                isset($_POST["prix"])
    ) {
        if (
                    //!empty($_POST['idCom']) &&
                    !empty($_POST['nom']) &&
			        !empty($_POST["telephone"]) && 
                    !empty($_POST["adresse"]) && 
                    !empty($_POST["prix"])
        ) {
            $commande = new commande(
                        //$_POST['idCom'],
                        $_POST['nom'],
				        $_POST['telephone'],
                        $_POST["adresse"],
                        $_POST['prix']
            );
            $commandeC->ajoutercommande($commande);
            header('Location:affichercommande.php');
        }
        else
            $error = "Missing information";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        
    
    <title>User display</title>
</head>

<body>
   
   <button><a href="affichercommande.php">Retour à la liste des commandes</a></button>
        <hr>
        
        
        <div id="error">
            <?php echo $error; ?>
        </div>
    <h1>Ajouter une commande</h1>
    
    <form name="form" id="Form" action=""  onsubmit="return validateForm(event)"method="POST"><script type="text/javascript" src="script.js" ></script>
        <table border="1" align="center">
            
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" id="nom"></td>
            </tr>
            <p style="color: red;" id="err1"></p>
            <tr>
                <td>Telephone</td>
                <td><input type="number" name="telephone" id="telephone"></td>
            </tr>
            <p style="color: red;" id="err3"></p>
            <tr>
                <td>Adresse</td>
                <td><input type="text" name="adresse" id="adresse"></td>
            </tr>
            <p style="color: red;" id="err4"></p>
            <tr>
                <td>Prix</td>
                <td><input type="number" name="prix" id="prix"></td>
            </tr>
            <p style="color: red;" id="err2"></p>
            <tr>
                
                <td><input type="submit" name="Ajouter" value="Passer la commande">
                </td>
                <td>
                        <input type="reset" value="Annuler" >
                    </td>
            </tr>
            
        </table>
        
    </form>
   
</body>
</html>

		 