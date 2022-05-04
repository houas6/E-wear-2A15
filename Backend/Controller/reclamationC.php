<?php
@session_start();
include_once '../config.php';
include_once '../Model/reclamation.php';
class reclamationC {
    function ajouterreclamtionn($reclamation){
        $sql="INSERT INTO recc (nomR, prenomR, mail, rec) 
        VALUES (:nomR,:prenomR,:mail, :rec)";
       $db = config::getConnexion();
        try{
        $query=$db->prepare($sql);
       $query->execute([
       //'idRec' => $reclamation->getidRec(),
       'nomR' => $reclamation->getNom(),
      'prenomR' => $reclamation->getPrenom(),
      'mail' => $reclamation->getmail(),
       'rec' => $reclamation->getrec()
       ]);
            			
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
    
    function UpdateReclamation($reclamation,$idRec){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE recc SET 
                    nomR = :nomR, 
                    prenomR = :prenomR,
                    mail = :mail,
                    rec = :rec
                WHERE idRec = :idRec'
            );
            $query->execute([
                'nomR' => $reclamation->getNom(),
                'prenomR' => $reclamation->getPrenom(),
                'mail' => $reclamation->getmail(),
                'rec' => $reclamation->getidRec(),
                'idRec' => $idRec
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function affichertri(){
        $sql="SELECT * FROM recc order by nomR";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMessage());
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
    function recupererrec($idRec){
        $sql="SELECT * from recc where idRec= :idRec";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->bindValue(':idRec',$idRec);
            $query->execute();
            $reclamation=$query->fetch();
            return $reclamation;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>