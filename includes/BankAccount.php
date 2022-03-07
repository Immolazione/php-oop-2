<?php

trait BankAccount {
    public $account_number;
    public $balance;


    //SETTERs
    public function setAccountNumber($account_number) {
        $this->account_number = $account_number;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }

    //GETTERs
    public function getAccountNumber() {
        return $this->account_number;
    }

    public function getBalance() {
        return $this->balance;
    }
}

?>