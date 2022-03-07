<?php

include_once __DIR__ . '/BankAccount.php';

class Costumer {

    use BankAccount;

    public $name;
    public $lastname;
    public $registered = false;

    public function __construct($name, $lastname, $registered) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->registered = $registered;
    }

    //SETTERs
    public function setName($name) {
        $this->name = $name;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setRegistered($registered) {
        $this->registered = $registered;
    }

    //GETTERs
    public function getName() {
        return $this->name;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getRegistered(){
        return $this->registered;
    }

}

?>