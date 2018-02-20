<?php
class User {
	protected $name;
	protected $email;
	
	public function __construct ($name, $email) {
		$this->name = $name;
		$this->email = $email;
	}
	
	public function display () {
		printf ('ik ben %s en mijn e-mail is %s', $this->name, $this->email);
	}
}
?>