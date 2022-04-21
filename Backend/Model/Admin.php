<?php
	class User
    {
        private $ID=null;
		private $name=null;
		private $email=null;
        private $pass=null;
		private $adresse=NULL;
        private $categorie=NULL;
        

     
        function __construct($ID,$name, $email, $pass, $adresse,$categorie)
        {
			$this->ID=$ID;
			$this->name=$name;
			$this->email=$email;         
            $this->pass=$pass;
			$this->adresse=$adresse; 
            $this->adresse=$categorie; 
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
        function getcategorie()
        {
			return $this->categorie;
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
        function setcategorie(string $categorie)
        {
			$this->categorie=$categorie;
		}
    }
?>       