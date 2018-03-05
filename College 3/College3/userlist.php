<center>
<?php
include 'weergevenerror.php';


/*
	* Depending on what class is called
	* The corresponding ".php" file is included
*/
function myAutoloader($className){
	include $className . '.php';
}

spl_autoload_register('myAutoloader');


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
//try block with students and teachers
try {
	$persoon2 = new Teacher('sjo', 'sjoerd##gmail.com');
	$persoon2->setEmployeeNumber(215);
	echo "Hallo ik ben " . $persoon2->name . "en mijn email is " . $person2->email . "en werknemernummer is" . $persoon2->werknemernummer;
} catch (Exception $e) {
	echo '<b><u>Foutmelding:</u><br></b>';
	echo $e->getMessage();
	echo "<b>Informatie van ingevulde persoon 1<br></b>Naam: Sjo, email: sjoerd##gmail.com, werknemernummer:215<br>";
}
try {
	$kevin = new Student('Kevin', 's111122@student.windesheim.nl');
	$kevin->setStudentnummer(1);
	echo "Hallo ik ben" . $kevin->name . "mijn email is " . $kevin->email . "en studentnummer is" . $kevin->studentnummer;
} catch (Exception $e) {
	echo "<b><u>Foutmelding:</u><br></b>";
	echo $e->getMessage();
	echo "<b>Informatie persoon 2:<br></b>Naam: Kevin, Email: s111122@student.windesheim.nl en studentnummer: 1<br>";
}/*try { 
	$wouter = new Student('Wouter', 'S1120575@windesheim.nl');
	$wouter->setStudentnummer(1120575);
	echo "Hallo ik ben" . $wouter->name . "en mijn email is " . $wouter->email . "en mijn studentnummer is" . $wouter->studentnummer;
}catch (Exception $e){
	echo "<b><u>Foutmelding:</u><br></b>";
	echo $e->getMessage();
	echo "<b>Informatie persoon 3:<br></b>Naam: Wouter, Email: S1120575@windesheim.nl en studentnummer: 1120575";
}*/





?>
<br>
<?php
include "../per3.php";
?>




</center>