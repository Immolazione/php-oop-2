<?php

trait BankAccount {
    public $account_number;
    public $balance;


    //SETTERs
    public function setAccountNumber($account_number) {
        $this->account_number = $account_number;
        return $this;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
        return $this;
    }

    //GETTERs
    public function getAccountNumber($account_number) {
        return $this->account_number;
    }

    public function getBalance($balance) {
        return $this->balance;
    }
}

?>