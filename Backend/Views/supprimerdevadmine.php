
<?php
// delete
if (isset($_GET["rep"])){
    $con = new PDO ('mysql:host=localhost;dbname=projet',"root","");
    $t= $con->prepare("delete from admine where ID=?");
$t ->execute (array($_GET["rep"]));
header('location:table-admin.php');
}
?>