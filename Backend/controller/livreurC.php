<?php

    include_once '../config.php';
    require_once '../model/livreur.php';
    require('fpdf/fpdf.php');
    


    Class livreurC {

        function afficherlivreur()
        {
            $requete = "select * from livreur";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }




        function getlivreurbyID($id)
        {
            $requete = "select * from livreur where id=:id";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id'=>$id
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajouterlivreur($livreur)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO livreur
                (id,nom,prenom,tel)
                VALUES
                (DEFAULT, :nom, :prenom, :tel)
                ');
                $querry->execute([
                    'nom'=>$livreur->getNom(),
                    'prenom'=>$livreur->getPrenom(),
                    'tel'=>$livreur->getTel()
                    


                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierlivreur($livreur)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE livreur SET
                nom=:nom,prenom=:prenom,tel=:tel
                where id=:id
                ');
                $querry->execute([
                    'id'=>$livreur->getid(),
                    'nom'=>$livreur->getNom(),
                    'prenom'=>$livreur->getPrenom(),
                    'tel'=>$livreur->getTel()
                    

                  
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }



        function supprimerlivreur($id)
        {
            $sql="DELETE FROM livreur WHERE id= :id_user";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_user',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
        }
        
    }