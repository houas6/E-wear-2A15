<?php
	include '../Controller/message.php';
	$message=new messageController();
	$listerec=$message->afficherMess(); 
?>

<html>
	<head></head>
	<body>
	    
		<center><h1>Liste des messages</h1></center>
		<table border="1" align="center">
			<tr>
		
				<th>Nom</th>
				<th>Email</th>
		
				<th>sujet</th>
				<th>message</th>
		
			</tr>
			<?php
				foreach($listerec as $message){
			?>
			<tr>
				
				<td><?php echo $message['nomRe']; ?></td>
				<td><?php echo $message['maile']; ?></td>
				<td><?php echo $message['sujetRe']; ?></td>
				<td><?php echo $message['messageRe']; ?></td>
				<td>
					
				</td>
				<td>
				<a href="deleteMess.php?sujetRe=<?php echo $message['sujetRe']; ?>">Supprimer</a>
				
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
