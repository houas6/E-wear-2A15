<?php

class Reclamation{
    private $idRec = null;
    private $nom = null;
    private $prenom = null;
    private $mail = null;
    private $rec = null;
  
    
    function __construct($idRec,$nomR, $prenomR, $mail, $rec){
        $this->idRec=$idRec;
        $this->nomR=$nomR;
        $this->prenomR=$prenomR;
        $this->mail=$mail;
        $this->rec=$rec;
     
    }
    
    function getidRec(){
        return $this->idRec;
    }
    function getNom(){
        return $this->nomR;
    }
    function getPrenom(){
        return $this->prenomR;
    }
    function getmail(){
        return $this->mail;
    }
    function getrec(){
        return $this->rec;
    }
   
    function setidRec(int $idRec){
        $this->idRec=$idRec;
    }
    function setNom(string $nomR){
        $this->nomR=$nomR;
    }
    function setPrenom(string $prenomR){
        $this->prenomR=$prenomR;
    }
    function setmail(string $mail){
        $this->mail=$mail;
    }
  
    function setrec(string $rec){
        $this->rec=$rec;
    }
   
}






?>