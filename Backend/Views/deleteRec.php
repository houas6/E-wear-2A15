<?php
@session_start();
include_once '../config.php';
include_once '../controller/reclamationC.php';
// delete
if (isset($_GET["rep"])){
    $con = new PDO ('mysql:host=localhost;dbname=projet',"root","");
    $t= $con->prepare("delete from recc where idRec=?");
$t ->execute (array($_GET["rep"]));
header('location:table-client.php');
}
