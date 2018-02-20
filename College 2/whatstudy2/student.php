<?php
require_once 'User.php';

class Student extends User {
	private $studentNumber = 'onbekend';
	
	public function setStudentNumber ($number) {
		$this->studentNumber = $number;	
	}
	public function getStudentNumber() {
		return $this->studentNumber;
	}
	public function display() {
		printf ('Ik ben %s, mijn e-mail is %s en mijn studentnummer is %s', $this->name, $this->email, $this->getStudentNumber());
	}
}