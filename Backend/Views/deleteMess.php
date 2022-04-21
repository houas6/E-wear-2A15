<?php
@session_start();
include_once '../config.php';
include_once '../controller/message.php';
// delete
if (isset($_GET["rep"])){
    $con = new PDO ('mysql:host=localhost;dbname=projet',"root","");
    $t= $con->prepare("delete from messa where idMes=?");
$t ->execute (array($_GET["rep"]));
header('location:table-message.php');
}