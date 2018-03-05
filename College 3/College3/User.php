<?php

include 'weergevenerror.php';

class User{
	protected $name;
	protected $email;

	public function __construct($name, $email){
	if (!strstr($email, '@')){
		throw new Exception('Email is verkeerd ingesteld<br>');
	}elseif (strlen($name) < 3) {
		throw new Exception('De naam is te kort<br>');
	}else {
		$this->name = $name;
		$this->email = $email;
	}
}

	public function display(){
		printf('Ik ben %s en mijn email is %s.', $this->name, $this->email);
	}
}
