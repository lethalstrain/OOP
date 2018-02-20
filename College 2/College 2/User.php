<?php

class User{
	protected $name;
	protected $email;

	public function __construct($name, $email){
		$this->name = $name;
		$this->email = $email;
	}

	public function display(){
		printf('Ik ben %s en mijn email is %s.', $this->name, $this->email);
	}
}