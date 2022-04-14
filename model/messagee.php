<?php

class messagee{
    
    private  $nomRe = null;
    private  $maile = null;
    private  $sujetRe = null;
    private  $messageRe = null;
  
    
    function __construct( $nomRe, $maile, $sujetRe, $messageRe){
        
        $this->nomRe=$nomRe;
        $this->maile=$maile;
        $this->sujetRe=$sujetRe;
        $this->messageRe=$messageRe;
     
    }
    
    
    function getNom(){
        return $this->nomRe;
    }
    function getEmail(){
        return $this->maile;
    }
    function getsujet(){
        return $this->sujetRe;
    }
    function getmess(){
        return $this->messageRe;
    }
   

    function setNom(string $nomRe){
        $this->nomRe=$nomRe;
    }
    function setEmail(string $maile){
        $this->maile=$maile;
    }
    function setsujet(string $sujetRe){
        $this->sujetRe=$sujetRe;
    }
    function setmess(string $mess){
        $this->messageRe=$messageRe;
    }
   
  
}






?>