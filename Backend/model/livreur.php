<?php
    class livreur
    {
        private $id;
        public $nom;
        public $prenom;
		private $tel;
        

        function __construct($id, $nom, $prenom,$tel){
			$this->id=$id;
			$this->nom=$nom;
            $this->prenom=$prenom;
			$this->tel=$tel;

		}

        function setid(int $id){
			$this->id=$id;
		}
        function setNom(string $nom){
			$this->nom=$nom;
		}
      
		function setPrenom(string $prenom){
			$this->prenom=$prenom;
		}
      
        function setTel(int $tel){
			$this->tel=$tel;
		}
	
        function getid(){
			return $this->id;
		}
        function getNom(){
			return $this->nom;
		}
       
		function getPrenom(){
			return $this->prenom;
		}
     
        function getTel(){
			return $this->tel;
		}	
			
    }
    

?>