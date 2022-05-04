<?php

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require_once '../PHPMailer/PHPMailerAutoload.php';
require_once '../PHPMailer/class.phpmailer.php';

class MailSender{
       private $_mailer;
       private $_result='';
       private $_state=false;
       private  $_recipient;
       private $_subject;
       private $_name;
       private $_message;
       private $_BCC;//$this->_mailer->addBCC($this->_BCC);
       private $_gmail=true;

    public function __construct(){

    $this->_mailer = new PHPMailer;


    $this->_mailer->IsSMTP();// Set mailer to use SMTP
    $this->_mailer->SMTPAuth = true; // Set mailer to use SMTP
        if ($this->_gmail) {    
            $this->_mailer->Host = 'smtp.gmail.com';  // Gmail smtp
            $this->_mailer->Port = 465; // TCP port to connect to (Defaut 25)
            $this->_mailer->SMTPSecure = true;
            $this->_mailer->SMTPSecure = "ssl";// Enable TLS encryption, `ssl` also accepted /secure transfer enabled REQUIRED for Gmail
        }else{
            $this->_mailer->Host = '<tls>';  // Specify main and backup server //stmp entrant sortant
        }

	$this->_mailer->SMTPDebug  = 0;  	// Enable SMTP authentication
    $this->_mailer->Username = 'mahdi.karray@esprit.tn';  // SMTP username
    $this->_mailer->Password = '201JMT4720';  // SMTP password



    $this->_mailer->addReplyTo("mahdi.karray@esprit.tn", "Ewear");
    $this->_mailer->From = 'mahdi.karray@esprit.tn';
    $this->_mailer->FromName = 'Ewear';


    }
}