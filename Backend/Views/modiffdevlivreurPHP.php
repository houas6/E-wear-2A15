
<?php
include '../controller/livreurC.php';
require_once '../model/livreur.php';

$livreurC = new livreurC();
if (isset($_GET['id'])) {
  $livToEdit = $livreurC-getlivreurbyID($_GET['id']);
}

  
 
     
          
          
          
           if (isset($_REQUEST['edit'])) {
          $livreur = new livreur($_POST['nom'], $_POST['prenom'], $_POST['tel']);
          $livreurC->modifierlivreur($livreur);
          
          header('Location:afficherlivreur.php');
          }
         // header('Location:blank.php');
       else {
          echo 'error';
          //header('Location:blank.php');
      }
  


?>