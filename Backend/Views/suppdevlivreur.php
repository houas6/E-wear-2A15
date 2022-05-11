<?php
    require '../controller/livreurC.php';
if (isset($_GET['id'])) {
    $livreurC = new livreurC();
    $livreurC->supprimerlivreur($_GET['id']);
   header('Location:afficherlivreur.php');
   echo 'sudd';
} else {
    echo 'oooooooooooooooooo';
}   
?>