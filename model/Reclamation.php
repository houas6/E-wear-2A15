<?php

class reclamation{
    private $idRec = null;
    private $nomR = null;
    private $prenomR = null;
    private $mail = null;
    private $rec = null;
  
    
    function __construct($nomR, $prenomR, $mail, $rec){
       // $this->idRec=$idRec;
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
   
    function setidRec($idRec){
        $this->idRec=$idRec;
    }
    function setNom($nomR){
        $this->nomR=$nomR;
    }
    function setPrenom($prenomR){
        $this->prenomR=$prenomR;
    }
    function setmail($mail){
        $this->mail=$mail;
    }
  
    function setrec($rec){
        $this->rec=$rec;
    }
   
}






?>