<?php 
class Persoon{
//properties	
	private $naam;
	private $email;

//methods
	public function defNaam($naam){
		$this->naam = $naam;
	}
	public function defEmail($email){
		$this->email = $email;
	}
	public function Toon(){
		printf("Ik ben $this->naam en mijn email is $this->email <br> welkom!");
	}
}
