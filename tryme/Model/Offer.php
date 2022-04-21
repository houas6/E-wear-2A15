<?php

class Offer {
    
    private  $id = null;
    private  $description = null;
    private  $pourcentage = null;
    private  $dateDebut = null;
    private  $dateFin = null;
    
    

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getPourcentage(){
		return $this->pourcentage;
	}

	public function setPourcentage($pourcentage){
		$this->pourcentage = $pourcentage;
	}

	public function getDateDebut(){
		return $this->dateDebut;
	}

	public function setDateDebut($dateDebut){
		$this->dateDebut = $dateDebut;
	}

	public function getDateFin(){
		return $this->dateFin;
	}

	public function setDateFin($dateFin){
		$this->dateFin = $dateFin;
	}
  
}






?>