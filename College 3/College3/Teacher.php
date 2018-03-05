<?php 
include 'weergevenerror.php';
class Teacher extends User {
    private $werknemernummer = 'onbekend';

    public function setEmployeeNumber($number) {
        if(strlen($werknemernummer) < 5){
            throw new Exception('werknemernummer is te kort');
        }else {
        $this->werknemernummer = $number;
    }
}

    public function getWerknemerNummer() {
        return $this->werknemernummer;
    }

    public function display() {
        printf('Ik ben %s, mijn e-mail is %s en mijn personeelsnummer
        is %s', $this->name, $this->email, $this->getWerknemerNummer());
    }
}


