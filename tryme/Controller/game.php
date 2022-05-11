<?php

class GameController {

    function addgame($game) {
        $sql = "INSERT INTO game (Description, code, email) VALUES ('".$game->getdescription()."', '".$game->getcode()."', '".$game->getemail()."');";


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

 

    function getGames() {
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
    
    

    function deletegame($id) {
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


    function updategame($game) {
        $sql = "UPDATE game SET ID = '".$game->getid()."', Description = '".$game->getDescription()."', code = '".$game->getcode()."', email = '".$game->getemail()."' WHERE ID = ".$game->getid();

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