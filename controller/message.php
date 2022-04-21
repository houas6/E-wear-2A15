<?php
@session_start();
include_once '../config.php';
include_once '../Model/messagee.php';
class messageController {
    function ajoutermessage($message){
        $sql="INSERT INTO messa (nomRe, maile, sujetRe, messageRe) 
        VALUES (:nomRe,:maile,:sujetRe, :messageRe)";
       $db = config::getConnexion();
        try{
        $query=$db->prepare($sql);
       $query->execute([
       //'idRec' => $reclamation->getidRec(),
       'nomRe' => $message->getNom(),
      'maile' => $message->getEmail(),
      'sujetRe' => $message->getsujet(),
       'messageRe' => $message->getmess()
       ]);
            			
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