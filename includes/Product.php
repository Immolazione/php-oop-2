<?php

class Product {
    public $name;
    public $price;
    public $details;
    public $product_code;


    // GETTERs (prende il valore)
    public function getName($name) {
         return $this->name; 
    }

    public function getPrice($price) {
        return "€" . $this->price;                      /*NON RIESCO A FARE FUNZIONARE STA ROBA*/
    }

    public function detDetails($details) {
        return $this->price;
    }

    public function getProductCode($product_code) {
        return $this->price;
    }
    
    // SETTERs (setta il valore)
    public function setName($name){
        if (!$name) {
            $this->name = 'AAAAAAAAAAA';
            return $this;
        } else {
            $this->name = $name;
            return $this;
        } 
    }

    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }

    public function setDetails($details) {
        $this->details = $details;
        return $this;
    }

    public function setProduct_code($product_code) {
        $this->product_code = $product_code;
        return $this;
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