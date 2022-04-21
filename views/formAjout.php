<?php
    include_once '../Model/Reclamation.php';
    include_once '../controller/reclamationC.php';
    $error = "";
    $reclamation = null;

    // create an instance of the controller
   
    $reclamationC = new reclamationC();
    if (
      //isset($_POST["idRec"]) &&	
		isset($_POST["nomR"]) &&		
    isset($_POST["prenomR"]) &&	
        isset($_POST["mail"]) &&
		isset($_POST["rec"]) 
        
    ) {
        if (
          //!empty($_POST['idRec']) &&
			!empty($_POST['nomR']) &&
            !empty($_POST["prenomR"]) && 
			!empty($_POST["mail"]) && 
            !empty($_POST["rec"]) 
            
        ) {
            $reclamation = new reclamation(
             // $_POST["idRec"],
              $_POST['nomR'],
              $_POST['prenomR'],
              $_POST['mail'],
              $_POST['rec']
              
            );
            $reclamationC->ajouterreclamtionn($reclamation);
            

            
        }
        else
            $error = "Missing information";
          //  var_dump($error);
            echo $error;
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <script type="text/javascript" src="OFFRE.js"></script>
</head>
    <body>
        <button><a href="afficherCategorieF.php">Retour à la liste des adherents</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form name="c" onsubmit="return validateForm(event)" action="" method="POST">
            <table border="1" align="center">
               
				<tr>
                    <td>
                        <label for="nomR">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nomR" id="nomR" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenomR">prenom:
                        </label>
                    </td>
                    <td><input type="text" name="prenomR" id="prenomR" maxlength="20"></td>
                </tr>
                <td>
                        <label for="mail">mail:
                        </label>
                    </td>
                    <td><input type="text" name="mail" id="mail" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="cmail">cmail:
                        </label>
                    </td>
                    <td><input type="text" name="cmail" id="cmail" maxlength="20"></td>
                </tr>
                <td>
                        <label for="rec">reclamation:
                        </label>
                    </td>
                    <td><input type="text" name="rec" id="rec" maxlength="20"></td>
                </tr>            
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" href="contact.php" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
Write to Achraf Jaidane
