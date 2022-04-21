<?php
@session_start();
include_once '../config.php';
include_once '../controller/reclamationC.php';
$reclamationC=new reclamationC();
    $reclamationC->deleterec($_GET["idRec"]);
    header('Location:afficherListeReclamation.php');

?>