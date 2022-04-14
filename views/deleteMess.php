<?php
@session_start();
include_once '../config.php';
include_once '../controller/message.php';
$messageController=new messageController();
    $messageController->deleteMess($_GET["sujetRe"]);
    header('Location:afficherListeMessage.php');

?>