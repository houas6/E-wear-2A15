<?php
    include_once '../Model/Reclamation.php';
    include_once '../controller/reclamationC.php';
    $error1 = "";
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
            $error1 = "Missing information";
          //  var_dump($error);
            echo $error1;
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Display</title>
    </head>
        <body>
            
            <hr>
            
            <div id="error">
                <?php echo $error1; ?>
            </div>
    <?php
                if (isset($_POST['idRec'])){
                    $reclamationC= $reclamationC->recupererrec($_POST['idRec']);
                    
            ?>
            
            <form action="" method="POST">
                <table border="1" align="center">

            
                    
                    <tr>
                            <td>
                                <label for="nomR">Nom:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="nomR" id="nomR" value="<?php echo $nomR; ?>">
                            </td>
                    </tr>
                
                    <tr>
                            <td>
                                <label for="prenomR">prenom :
                                </label>
                            </td>
                            <td>
                                <input type="text" name="prenomR" id="prenomR" value="<?php echo $reclamation['prenomR']; ?>">
                            </td>
                    </tr>
                    
                    <tr>
                            <td>
                                <label for="mail">Adresse:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="mail" id="mail" value="<?php echo $reclamation['mail']; ?>">
                            </td>
                    </tr>
                    
                    <tr>
                            <td>
                            <label for="rec">reclamation:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="rec" id="rec">
                            </td>
                    </tr>
                    
                    <tr>
                            <td>
                                <input  type="submit" value="Modifier" >
                            </td>
                            <td>
                                <input type="reset" value="Annuler" >
                            </td>
                    </tr>
                </table>
            </form>
                    <?php
                    }
                    ?>
            </body>
        </html>