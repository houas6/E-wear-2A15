<?php
include '../../config.php';
include_once '../Model/Offer.php';

class OfferController {

    function addOffer($offer) {
        $sql = "INSERT INTO offre (description, pourcentage, dateDebut, dateFin) VALUES ('".$offer->getDescription()."', '".$offer->getPourcentage()."', '".$offer->getDateDebut()."', '".$offer->getDateFin()."');";



        $db = config::getConnexion();
        try{
        $query=$db->prepare($sql);
       $query->execute();
            			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }


    function getOffer($id) {
        $sql = "SELECT * FROM offre WHERE ID = ".$id;

        $db = config::getConnexion();
        try{
        $result=$db->query($sql)->fetch();
        return $result;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function getOffers() {
        $sql = "SELECT * FROM offre";


        $db = config::getConnexion();
        try{
            
            
        $result=$db->query($sql);

        return $result;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    

    function deleteOffers($id) {
        $sql = "DELETE FROM offre WHERE ID = ".$id;


        $db = config::getConnexion();
        try{
        $query=$db->prepare($sql);
        $query->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }


    function updateOffer($offer) {
        $sql = "UPDATE offre SET description = '".$offer->getDescription()."', pourcentage = '".$offer->getPourcentage()."', dateDebut = '".$offer->getDateDebut()."', dateFin = '".$offer->getDateFin()."' WHERE ID = ".$offer->getId();

        $db = config::getConnexion();
        try{
        $query=$db->prepare($sql);
        $query->execute([]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }



}

?>