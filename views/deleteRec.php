<?php
@session_start();
include_once '../config.php';
include_once '../controller/reclamationC.php';
$reclamationController=new reclamationController();
    $reclamationController->deleterec($_GET["idRec"]);
    header('Location:afficherListeReclamation.php');

?>