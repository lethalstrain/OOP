<?
include 'teacher.php';
include 'student.php';

class UserList {
	private $users = array();
	
	public function addUser(User $user) {
		$this->users[] = $user;	
	}
	
	public function display() {
		foreach ($this->users as $user) {
			$user->display();
			echo "<br><br>";
		}
	}
}

$list = new UserList();

$sjoerd= new Teacher('sjoerd', 'sjoerd@devos.nl');
$sjoerd->setEmployeeNumber(12345657896088);
$list->addUser($sjoerd);

$toma= new Student('toma', 'toma@sakko.nl');
$toma->setStudentNumber(1104305);
$list->addUser($toma);

$list->display();
?>