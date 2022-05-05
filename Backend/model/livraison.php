<?php
    class livraison
    {
        private $id;
        public $nom;
        public $prenom;
		private $adresse;
        private $mail;
        private $frais;
        private $tel;
		private $id_livreur;

        function __construct($id, $nom, $prenom,$adresse,$mail,$frais,$tel,$id_livreur){
			$this->id=$id;
			$this->nom=$nom;
            $this->prenom=$prenom;
			$this->adresse=$adresse;
			$this->mail=$mail;
            $this->frais=$frais;
            $this->tel=$tel;
			$this->id_livreur=$id_livreur;

		}

        function setid(int $id){
			$this->id=$id;
		}
        function setNom(string $nom){
			$this->nom=$nom;
		}
        function setAdresse(string $adresse){
			$this->adresse=$adresse;
        }
		function setPrenom(string $prenom){
			$this->prenom=$prenom;
		}
        function setMail(string $mail){
			$this->mail=$mail;
		}
        function setFrais(int $frais){
			$this->frais=$frais;
		}
        function setTel(int $tel){
			$this->tel=$tel;
		}
		function setid_livreur(int $id_livreur){
			$this->id_livreur=$id_livreur;
		}

        function getid(){
			return $this->id;
		}
        function getNom(){
			return $this->nom;
		}
        function getAdresse(){
			return $this->adresse;
        }
		function getPrenom(){
			return $this->prenom;
		}
        function getMail(){
			return $this->mail;
		}
        function getFrais(){
			return $this->frais;
		}
        function getTel(){
			return $this->tel;
		}	
		function getid_livreur(){
			return $this->id_livreur;
		}	
    }
    

?>