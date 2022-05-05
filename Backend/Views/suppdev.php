<?php
    require '../controller/livraisonC.php';
if (isset($_GET['id'])) {
    $livraisonC = new livraisonC();
    $livraisonC->supprimerlivraison($_GET['id']);
   header('Location:afficherlivraison.php');
   echo 'sudd';
} else {
    echo 'oooooooooooooooooo';
}   
?>