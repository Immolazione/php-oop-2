<?php

class Costumer {
    public $name;
    public $lastname;
    public $registered;

    public function __construct($name, $lastname, $registered) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->registered = $registered;
    }

    //SETTERs
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    public function setRegistered($registered) {
        $this->registered = $registered;
        return $this;
    }

    //GETTERs
    public function getName($name) {
        return $this->name;
    }

    public function getLastname($lastname) {
        return $this->lastname;
    }

    public function getRegistered($registered){
        return $this->registered;
    }

}

?>