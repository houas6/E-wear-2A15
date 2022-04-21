<?php

    require_once '../../config.php';
    require_once '../../model/livraison.php';


    Class livraisonC {

        function afficherlivraison()
        {
            $requete = "select * from livraison";
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




        function getlivraisonbyID($id)
        {
            $requete = "select * from livraison where id=:id";
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

        function ajouterlivraison($livraison)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO livraison
                (nom,prenom, adresse,mail,frais,tel)
                VALUES
                (:nom,:prenom, :adresse,:mail,:frais,:tel)
                ');
                $querry->execute([
                    'nom'=>$livraison->getNom(),
                    'prenom'=>$livraison->getPrenom(),
                    'adresse'=>$livraison->getAdresse()
                    'mail'=>$livraison->getMail(),
                    'frais'=>$livraison->getFrais(),
                    'tel'=>$livraison->getTel(),

                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierlivraison($livraison)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE livraison SET
                nom=:nom,prenom=:prenom,adresse=:capacite
                where id=:id
                ');
                $querry->execute([
                    'id'=>$livraison->getid();
                    'nom'=>$livraison->getNom(),
                    'prenom'=>$livraison->getPrenom(),
                    'adresse'=>$livraison->getAdresse()
                    'mail'=>$livraison->getMail(),
                    'frais'=>$livraison->getFrais(),
                    'tel'=>$livraison->getTel(),

                  
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }



        function supprimerlivraison($id)
        {
            $sql="DELETE FROM livraison WHERE id= :id_user";
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