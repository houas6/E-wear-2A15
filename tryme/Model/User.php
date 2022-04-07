<?php
	class User
    {
        private $ID=null;
		private $name=null;
		private $email=null;
        private $pass=null;
		private $adresse=NULL;

     
        function __construct($name, $email, $pass, $adresse)
        {
			//$this->ID=$ID;
			$this->name=$name;
			$this->email=$email;         
            $this->pass=$pass;
			$this->adresse=$adresse; 
		}

        function getID()
        {
			return $this->ID;
		}
		function getname()
        {
			return $this->name;
		}
		function getemail()
        {
			return $this->email;
		}
        function getpass()
        {
			return $this->pass;
		}
		function getadresse()
        {
			return $this->adresse;
		}
        function setID(int $ID)
        {
			$this->ID=$ID;
		}
		function setname(string $name)
        {
			$this->name=$name;
		}
		function setemail(string $email)
        {
			$this->email=$email;
		}
		function setpass(string $pass)
        {
			$this->pass=$pass;
		}
		function setadresse(string $adresse)
        {
			$this->adresse=$adresse;
		}
    }
?>       