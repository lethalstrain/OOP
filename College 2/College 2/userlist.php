<center>
<?php

include 'Student.php';
include 'Teacher.php';

class userlist{
	private $users = array();

	public function addUser(User $user){
		$this->users[] = $user;
	}

	public function display(){
		foreach ($this->users as $user){
			$user->display();
			echo "<br><br>";
		}
	}
}

//maken van nieuwe lijst
$list = new userlist();
//Docent add
$sjoerd= new Teacher('sjoerd', 'sjoerd@devos.nl');
$sjoerd->setEmployeeNumber(123456789);
$list->addUser($sjoerd);
//student add
$Wouter = new Student('Woutrer', 'Wouter@gotmail.com');
$list->addUser($Wouter);

$list->display();
//plaatst link
require_once "../per3.php";
?>
</center>