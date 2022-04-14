<?php
	include '../Controller/reclamationC.php';
	$reclamation=new reclamationController();
	$listerec=$reclamation->afficherrec(); 
?>

<html>
	<head></head>
	<body>
	    
		<center><h1>Liste des reclamations</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id de reclamation</th>
				<th>Nom</th>
				<th>Prenom</th>
		
				<th>Email</th>
				<th>reclamation</th>
		
			</tr>
			<?php
				foreach($listerec as $reclamation){
			?>
			<tr>
				<td><?php echo $reclamation['idRec']; ?></td>
				<td><?php echo $reclamation['nomR']; ?></td>
				<td><?php echo $reclamation['prenomR']; ?></td>
				<td><?php echo $reclamation['mail']; ?></td>
				<td><?php echo $reclamation['rec']; ?></td>
				<td>
					
				</td>
				<td>
					<a href="deleteRec.php?idRec=<?php echo $reclamation['idRec']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
