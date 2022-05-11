<?php

    include_once '../config.php';
    require_once '../model/livraison.php';
    require('fpdf/fpdf.php');
    


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
                (id,nom,prenom,adresse,mail,frais,tel,id_livreur)
                VALUES
                (DEFAULT, :nom, :prenom, :adresse, :mail, :frais, :tel, :id_livreur)
                ');
                $querry->execute([
                    'nom'=>$livraison->getNom(),
                    'prenom'=>$livraison->getPrenom(),
                    'adresse'=>$livraison->getAdresse(),
                    'mail'=>$livraison->getMail(),
                    'frais'=>$livraison->getFrais(),
                    'tel'=>$livraison->getTel(),
                    'id_livreur'=>$livraison->getid_livreur()


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
                nom=:nom,prenom=:prenom,adresse=:adresse,mail=:mail,frais=:frais,tel=:tel,id_livreur=:id_livreur
                where id=:id
                ');
                $querry->execute([
                    'id'=>$livraison->getid(),
                    'nom'=>$livraison->getNom(),
                    'prenom'=>$livraison->getPrenom(),
                    'adresse'=>$livraison->getAdresse(),
                    'mail'=>$livraison->getMail(),
                    'frais'=>$livraison->getFrais(),
                    'tel'=>$livraison->getTel(),
                    'id_livreur'=>$livraison->getid_liveur(),

                  
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
        function excel()
  {
    $con = config::getConnexion();
    $fileName = "Demande_list" . date('d-m-Y') . ".csv";
    @header("Content-Disposition: attachment; filename=" . $fileName);
    @header("Content-Type: application/csv");
    @header("Pragma: no-cache");
    @header("Expires: 0");

    $select = "SELECT * From livraison";
     
    $stmt = $con->prepare($select);
    $stmt->execute();
    $data = "";
    $data .= "id" . ",";
    $data .= "nom" . ",";
    $data .= "prenom" . ",";
    $data .= "adresse" . ",";
    $data .= "mail" . "\n";
    $data .= "frais" . "\n";
    $data .= "tel" . "\n";
    $data .= "id_liveur" . "\n";




   
   

    while ($row = $stmt->fetch()) {
      $data .= $row['id'] . ",";
      $data .= $row['nom'] . ",";
      $data .= $row['prenom'] . ",";
      $data .= $row['adresse'] . ",";
      $data .= $row['mail'] . "";
      $data .= $row['frais'] . "";
      $data .= $row['tel'] . "";
      $data .= $row['id_livreur'] . "";





    }

    echo $data;
    exit();
  }
    }