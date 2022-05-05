
<?php
include '../controller/livraisonC.php';
require_once '../model/livraison.php';

$livraisonC = new livraisonC();
if (isset($_GET['id'])) {
  $livToEdit = $livraisonC-getlivraisonbyID($_GET['id']);
}

  
 
     
          
          
          
           if (isset($_REQUEST['edit'])) {
          $livraison = new livraison($_POST['adresse'], $_POST['nom'], $_POST['prenom'], $_POST['tel'],$_POST['mail'],$_POST['frais']);
          $livraisonC->modifierlivraison($livraison);
          
          header('Location:afficherlivraison.php');
          }
         // header('Location:blank.php');
       else {
          echo 'error';
          //header('Location:blank.php');
      }
  


?>