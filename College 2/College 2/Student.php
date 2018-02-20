<?php
require_once 'User.php';

class Student extends User {
	private $studentnummer = 'onbekend';

	public function setStudentnummer($number){
		$this->studentnummer = $number;
	}
	public function getStudentNummer(){
		return $this->studentnummer;
	}
	public function display(){
		printf('Ik ben %s, mijn email is %s en studentnummer is %s.', $this->name, $this->email, $this->getStudentNummer());
	}
}