<?php
   include_once '../Model/User.php';
   include_once '../Controller/User.php';
   $error = "";
   $User = null;

   // create an instance of the controller
   $UserController = new UserController();
   if (
       isset($_POST["name"]) &&		
       isset($_POST["email"]) &&
       isset($_POST["pass"]) && 
       isset($_POST["adresse"])
   ) {
       if (
           !empty($_POST['name']) &&
           !empty($_POST["email"]) && 
           !empty($_POST["pass"]) && 
           !empty($_POST["adresse"])
       ) {
           $User = new User(
               $_POST['name'],
               $_POST['email'],
               $_POST['pass'],
               $_POST['adresse'],
           );
           $UserController->addUserB($User);
           var_dump($User);
          header('Location:table-client.php');
       }
       else
           $error = "Missing information";
           echo $error;
   }
   var_dump($_POST);
?>
