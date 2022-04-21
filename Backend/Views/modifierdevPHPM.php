<?php
$idMes = (int)$_POST["idMes"];
$nomRe = $_POST["nomRe"];
$maile = $_POST["maile"];
$sujetRe = $_POST["sujetRe"];
$messageRe = $_POST["messageRe"];

$con = new PDO ('mysql:host=localhost;dbname=projet',"root","");
$t= $con->prepare("update messa set nomRe='$nomRe',maile='$maile',sujetRe='$sujetRe',messageRe='$messageRe' where idMes=$idMes");
$result = $t->execute();
header('location:table-message.php');
?>