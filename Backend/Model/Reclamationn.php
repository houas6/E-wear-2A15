<?php

class Reclamationn{
    private ?int $idR = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $email = null;
    private ?string $rec = null;
  
    
    function __construct(int $idR,string $nom, string $prenom, string $email, string $rec){
        $this->idR=$idR;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->rec=$rec;
     
    }
    
    function getidR(): int{
        return $this->idR;
    }
    function getNom(): string{
        return $this->nom;
    }
    function getPrenom(): string{
        return $this->prenom;
    }
    function getEmail(): string{
        return $this->email;
    }
    function getrec(): string{
        return $this->rec;
    }
   
    function setidR(int $idR): void{
        $this->idR=$idRs;
    }
    function setNom(string $nom): void{
        $this->nom=$nom;
    }
    function setPrenom(string $prenom): void{
        $this->prenom;
    }
    function setEmail(string $email): void{
        $this->email=$email;
    }
  
    function setrec(string $rec): void{
        $this->rec=$rec;
    }
   
}






?>