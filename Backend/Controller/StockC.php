<?PHP
	include '../../config.php';
	include_once '../Model/Stock.php';

	class StockC {
		
		function ajouterStock($Stock){
			
			
			$sql="INSERT INTO Stock (dispo, nbrarticle, datearr) 
			VALUES (:dispo,:nbrarticle,:datearr)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					
					'dispo' => $Stock->getdispo(),
					'nbrarticle' => $Stock->getnbrarticle(),
					'datearr' => $Stock->getdatearr(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		
		
		function afficherStock(){
			
			$sql="SELECT * FROM Stock";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function supprimerStock($idCom){
			$sql="DELETE FROM Stock WHERE idCom= :idCom";
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
		function recupererStock($idCom){
			$sql="SELECT * from Stock where idCom=$idCom";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				
				$query->execute();
				$Stock=$query->fetch();
				return $Stock;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierStock($Stock,$idCom){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Stock SET 
						dispo = :dispo, 
						nbrarticle = :nbrarticle,
						datearr = :datearr,
						
					WHERE idCom = :idCom'
				);
				$query->execute([
					'dispo' => $Stock->getdispo(),
					'nbrarticle' => $Stock->getnbrarticle(),
					'datearr' => $Stock->getdatearr(),
					
					'idCom' => $idCom
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}

?>