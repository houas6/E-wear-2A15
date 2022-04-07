<?php
include '../../config.php';
         
    $requete =$pdo->query('SELECT name, pass FROM user WHERE email = "'.$_REQUEST['email'].'"');
    $ul=mysql_fetch_array($requete);
     
        $MailTo =$_POST['email'];
        $MailSubject = "[Inscription]";
        $MailHeader = "header";
         
        $Envoi = 1;
          
        $MailBody = "Votre identifiant : ".$ul['name']."\n";
        $MailBody .= "Votre mot de passe : ".$ul['pass']."\n";
         
        if ($Envoi == 1)
            {
            ini_set("SMTP","smtp.orange.fr");
                mail($MailTo, $MailSubject, $MailBody, $MailHeader); //envoi du message
                echo("<p><font face=verdana size=2>Votre message a bien été envoyé.<br>
                </font>");
                echo("<p>&nbsp;</p><p>&nbsp;</p>
                <p align=\"center\"><a href=\"index.php\"><strong>Retour</strong></a></p>");
            }
?>