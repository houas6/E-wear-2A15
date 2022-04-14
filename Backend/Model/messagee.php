<?php

class messagee{
    private ?int $idM = null;
    private ?string $nom = null;
    private ?string $email = null;
    private ?string $sujet = null;
    private ?string $mess = null;
  
    
    function __construct(int $idM,string $nom, string $email,string $sujet, string $mess){
        
        $this->idM=$idM;
        $this->nom=$nom;
        $this->email=$email;
        $this->sujet=$sujet;
        $this->mess=$mess;
     
    }
    
    function getidM(): int{
        return $this->idM;
    }
    function getNom(): string{
        return $this->nom;
    }
    function getEmail(): string{
        return $this->email;
    }
    function getsujet(): string{
        return $this->sujet;
    }
    function getmess(): string{
        return $this->mess;
    }
   
   
function setidM(int $idM): void{
        $this->idM=$idM;
    }
    function setNom(string $nom): void{
        $this->nom=$nom;
    }
    function setEmail(string $email): void{
        $this->email=$email;
    }
    function setsujet(string $sujet): void{
        $this->sujet;
    }
    function setmess(string $mess): void{
        $this->mess=$mess;
    }
   
  
}






?>