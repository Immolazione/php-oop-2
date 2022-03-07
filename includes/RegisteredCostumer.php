<?php

require_once __DIR__ . '/Costumer.php';
include_once __DIR__ . '/BankAccount.php';

class RegisteredCostumer extends Costumer {

    use BankAccount;

    public $registered = [];
    public $email_address;
    public $password;

    public function __construct($name, $lastname, $registered, $email_address, $password) {
        parent::__construct($name, $lastname, $registered);
        $this->email_address = $email_address;
        $this->password = $password;
    }

    //GETTERs
    public function getEmailAddress() {
        return $this->email_address;
    }

    public function getPassword() {
        return $this->password;
    }

    //SETTERs
    public function setEmailAddress($email_address) {
        $this->email_address = $email_address;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}

?>
