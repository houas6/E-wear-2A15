<?php
@session_start();
include_once '../config.php';
include_once '../Model/reclamation.php';
class reclamationController {
    function ajouterreclamtionn($reclamation){
        $db = config::getConnexion();
        try{
        $stmt = $db->prepare("INSERT INTO recc (idRec ,nomR, prenomR, mail, rec) 
        VALUES (:idRec,:nomR,:prenomR,:mail, :rec)");
       
       $stmt->bindParam(':idRec' -> $reclamation->getidRec());
       $stmt->bindParam(':nomR' -> $reclamation->getNom());
       $stmt->bindParam(':prenomR' -> $reclamation->getPrenom());
       $stmt->bindParam(':mail' -> $reclamation->getmail());
       $stmt->bindParam(':rec' -> $reclamation->getrec());
       $stmt->execute();
            			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    function afficherrec(){
        $sql="SELECT * FROM recc";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }
    function UpdateReclamation($reclamation){
        $db = config::getConnexion();

        try{
                  // prepare sql and bind parameters
            $sql = "UPDATE `recc` SET `nomR` = '".$reclamation->getNom()."',`prenomR` = '".$reclamation->getPrenom()."', `mail` = '".$reclamation->getmail()."', `rec` = '".$reclamation->getrec()."' ' WHERE `recc`.`idR` = '".$reclamation->getidR()."'";
            $stmt = $db->prepare($sql);	
            
            $stmt->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
    function deleteRec($idRec){
        $sql="DELETE FROM recc WHERE idRec=:idRec";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idRec', $idRec);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
        }
    }



}

?>