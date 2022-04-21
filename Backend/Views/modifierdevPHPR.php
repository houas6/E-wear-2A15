<?php
$idRec = (int)$_POST["idRec"];
$nomR = $_POST["nomR"];
$prenomR = $_POST["prenomR"];
$mail = $_POST["mail"];
$rec = $_POST["rec"];

$con = new PDO ('mysql:host=localhost;dbname=projet',"root","");
$t= $con->prepare("update recc set nomR='$nomR',prenomR='$prenomR',mail='$mail',rec='$rec' where idRec=$idRec");
$result = $t->execute();
header('location:table-client.php');
?>