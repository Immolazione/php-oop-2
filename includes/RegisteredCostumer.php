<?php

require_once __DIR__ . '/Costumer.php';

class RegisteredCostumer extends Costumer {
    public $registered = true;
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

    public function getPassword($password) {
        return $this->password;
    }

    //SETTERs
    public function setEmail_Address($email_address) {
        $this->email_address = $email_address;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }
}

?>
