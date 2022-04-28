<?php

class GameController {

    function addgame($game) {
        $sql = "INSERT INTO game (ID, Description, code, email) VALUES ('".$game->getid()."', '".$game->getdescription()."', '".$game->getcode()."', '".$game->getemail()."');";


        $db = config::getConnexion();
        try{
        $query=$db->prepare($sql);
       $query->execute();
            			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }


    function getgame($id) {
        $sql = "SELECT * FROM game WHERE ID = ".$id;

        $db = config::getConnexion();
        try{
        $result=$db->query($sql)->fetch();
        return $result;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function getgame() {
        $sql = "SELECT * FROM game";


        $db = config::getConnexion();
        try{
            
            
        $result=$db->query($sql);

        return $result;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function getOffersSorted($by) {
        $sql = "SELECT * FROM game order by ".$by." desc";


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
        $sql = "DELETE FROM game WHERE ID = ".$id;


        $db = config::getConnexion();
        try{
        $query=$db->prepare($sql);
        $query->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

}
    function updateOffer($game) {
        $sql = "UPDATE game SET ID = '".$game->getid()."', Description = '".$game->descrption()."', code = '".$game->getcode()."', email = '".$game->getemail()."' WHERE ID = ".$->getId();

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