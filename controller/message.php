<?php
@session_start();
include_once '../config.php';
include_once '../Model/messagee.php';
class messageController {
    function ajoutermessage($message){
        $db = config::getConnexion();
        try{
        $stmt = $db->prepare("INSERT INTO messa (nomRe, maile, sujetRe, messageRe) 
        VALUES (:nomRe,:maile,:sujetRe, :messageRe)");
       
      
       $stmt->bindParam(':nomRe' -> $message->getNom());
       $stmt->bindParam(':maile' -> $message->getEmail());
       $stmt->bindParam(':sujetRe' -> $message->getsujet());
       $stmt->bindParam(':messageRe' -> $message->getmess());
       $stmt->execute();
            			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    function affichermess(){
        $sql="SELECT * FROM messa";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }
    function deleteMess($sujetRe){
        $sql="DELETE FROM messa WHERE sujetRe=:sujetRe";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':sujetRe', $sujetRe);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
        }
    }


}

?>