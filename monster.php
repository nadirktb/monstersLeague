<?php

class Monster {
	private $name;
	private $age;
	private $life;
	private $strength;

	
	function __construct($name, $age, $life, $strength){
		$this->name = $name;
		$this->age = $age;
		$this->life = $life;
		$this->strength = $strength;
	}

	
	function getlife(){
		return $this->life;
	}
	
	function getstrength(){
		return $this->strength;         
	}  
	
	function getname(){       
		return $this->name;         
	}    
  
	function setname($name){   
		$this->name=$name;
	}
	
	function setlife($life){   
		$this->life=$life;
	}
	
	function setstrength($strength){   
		$this->strength=$strength;
	}
	
	
	function getage(){       
		return $this->age;         
	}    
  
	function setage($age){   
		$this->age=$age;
	}
	
	
}


