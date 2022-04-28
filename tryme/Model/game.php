<?php

class Game {
    
    private  $id = null;
    private  $description = null;
    private  $code= null;
    private  $email= null;
    
    

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

	public function getcode(){
		return $this->code;
	}

	public function setcode($code){
		$this->code = $code;
	}

	public function getemail(){
		return $this->email;
	}

	public function setemail($email){
		$this->email = $email;
	}
	

  
}






?>