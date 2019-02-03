<?php

class Monster {
	private $id;
	private $name;
	private $age;
	private $life;
	private $strength;

	
	function __construct($id, $name, $age, $life, $strength){
		$this->id = $id;
		$this->name = $name;
		$this->age = $age;
		$this->life = $life;
		$this->strength = $strength;
	}

	
	function getlife(){
		return $this->life;
	}
	
	function getid(){
		return $this->id;
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


