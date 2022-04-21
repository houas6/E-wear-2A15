<?php
    include_once '../../Model/User.php';
    include_once '../../Controller/User.php';
    $error = "";
    $User = null;

    // create an instance of the controller
    $UserController = new UserController();
    $UserController->deleteUser($_SESSION["ID"]);
    header('Location:logout.php');