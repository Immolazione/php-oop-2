<?php

class Product {
    public $name;
    public $price;
    public $details;
    public $product_code;


    // GETTERs (prende il valore)
    public function getName() {
         return $this->name; 
    }

    public function getPrice() {
        return "€" . $this->price;                      /*NON RIESCO A FARE FUNZIONARE STA ROBA*/
    }

    public function getDetails() {
        return $this->price;
    }

    public function getProductCode() {
        return $this->price;
    }
    
    // SETTERs (setta il valore)
    public function setName($name){
        if (!$name) {
            $this->name = 'AAAAAAAAAAA';
        } else {
            $this->name = $name;
        } 
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setDetails($details) {
        $this->details = $details;
    }

    public function setProduct_code($product_code) {
        $this->product_code = $product_code;
    }

    public function __construct($name, $price, $details, $product_code, $animal){
        $this->setName($name);
        $this->price = $price;
        $this->details = $details;
        $this->product_code = $product_code;
        $this->animal = $animal;
    }
}



?>