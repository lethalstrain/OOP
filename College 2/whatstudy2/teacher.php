<?php
require_once 'User.php';

class Teacher extends User {
	private $employeeNumber = 'onbekend';
	
	public function setEmployeeNumber($number) {
		$this->employeeNumber = $number;
	}
	
	public function getEmployeeNumber() {
		return $this->employeeNumber;
	}
	
	public function display() {
		printf('ik ben %s, mijn e-mail is %s en mijn docentnummer is %s', 
		$this->name, $this->email, $this->getEmployeeNumber());
	}
}
?>