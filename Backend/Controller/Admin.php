<?php
	@session_start();
	include '../config.php';
	include_once '../Model/Admin.php';
	class AdminController {
		function addAdminB($Admin){
			$db = config::getConnexion();
            
			try{
				      // prepare sql and bind parameters
				$stmt = $db->prepare("INSERT INTO admine (ID, name, email, pass, adresse,categorie) VALUES (DEFAULT, :name, :email, :pass, :adresse, :categorie)");
			//	$stmt->bindParam(':ID', $User->getID());
				$stmt->bindValue(':name', $Admin->getname());
				$stmt->bindValue(':email', $Admin->getemail());
				$stmt->bindValue(':pass', $Admin->getpass());
				$stmt->bindValue(':adresse', $Admin->getadresse());
                $stmt->bindValue(':categorie', $Admin->getcategorie());
				$stmt->execute();
				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function UpdateAdmin($Admin){
			$db = config::getConnexion();

			try{
				      // prepare sql and bind parameters
				$sql = "UPDATE `admine` SET `Name` = '".$Admin->getname()."', `email` = '".$Admin->getemail()."', `pass` = '".$Admin->getpass()."', `adresse` = '".$Admin->getadresse()."', `categorie` = '".$Admin->getcategorie()."' ' WHERE `Admin`.`ID` = '".$Admin->getID()."'";
				$stmt = $db->prepare($sql);	
				
				$stmt->execute();
				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
/*
		function loginUser($Email, $pass){
			$db = config::getConnexion();
			try{
				$stmt=$db->prepare("SELECT * from user where (email='".$email."' AND pass='".$pass."')");
				$stmt->execute();
				if ($stmt->rowCount() > 0) {
					while($found_user = $stmt->fetch(PDO::FETCH_ASSOC)) {
						if (!array_key_exists('email',$_SESSION)) {
							$_SESSION["ID"] = $found_user["ID"];
							$_SESSION["name"] = $found_user["name"];
							$_SESSION["email"] = $found_user["email"];
							$_SESSION["pass"] = $found_user["pass"];
							$_SESSION["adresse"] = $found_user["adresse"];
							}
					}
					header('Location:../index.php');

				}
				else {
					echo "<script type='text/javascript'>alert('Username/Password are wrong');</script>";
					header('Location:../Users/login.php');
				}

			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
*/
		function deleteAdmin($ID){
			$sql="DELETE FROM admine WHERE ID=:ID";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ID', $ID);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function getAdmin(array $values) {
			$db = config::getConnexion();
			$sql = "select * from admine where email = :email and pass = :pass";
			try{
				$query = $db->prepare($sql);
				$query->execute($values);
				return $query->fetch();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function afficheradmintri(){
			
			$sql="SELECT * FROM admine ORDER BY name ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

	}
?>