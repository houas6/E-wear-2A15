<?PHP
	include '../../config.php';
	include_once '../Model/commande.php';

	class commandeC {
		
		function ajoutercommande($commande){
			
			
			$sql="INSERT INTO commande (nom, telephone, adresse, prix) 
			VALUES (:nom,:telephone,:adresse, :prix)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					//'idCom' => $commande->getidCom(),
					'nom' => $commande->getNom(),
					'telephone' => $commande->gettelephone(),
					'adresse' => $commande->getadresse(),
					'prix' => $commande->getPrix()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function modifiercours($Commande, $idCom){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE commande SET 
						nom = :nom, 
						telephone = :telephone,
						adresse = :adresse,
						prix = :prix
					WHERE idCom = :idCom'
				);
				$query->execute([
					'nom' => $Commande->getNom(),
					'telephone' => $Commande->gettelephone(),
					'adresse' => $Commande->getadresse(),
					'prix' => $Commande->getPrix(),
					'idCom' => $idCom
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recuperercours($idCom){
			$sql="SELECT * FROM commande where idCom=$idCom";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Cours=$query->fetch();
				return $Cours;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function affichercommande(){
			
			$sql="SELECT * FROM commande";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function supprimercommande($idCom){
			$sql="DELETE FROM commande WHERE idCom= :idCom";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idCom',$idCom);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recuperercommande($idCom){
			$sql="SELECT * from commande where idCom=$idCom";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				
				$query->execute();
				$commande=$query->fetch();
				return $commande;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifiercommande($commande,$idCom){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE commande SET 
						nom = :nom, 
						telephone = :telephone,
						adresse = :adresse,
						prix = :prix
					WHERE idCom = :idCom'
				);
				$query->execute([
					'nom' => $commande->getNom(),
					'telephone' => $commande->gettelephone(),
					'adresse' => $commande->getadresse(),
					'prix' => $commande->getPrix(),
					'idCom' => $idCom
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}

?>