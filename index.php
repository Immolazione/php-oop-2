<?php

/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare
uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e
ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
*/

class Product {
    public $name;
    public $price;
    public $details;
    public $product_code;
    public $animal;


    // GETTERs (prende il valore)
    public function getName($name) {
         return $this->name; 
    }

    public function getPrice($price) {
        return $this->price;
    }

    public function detDetails($details) {
        return $this->price;
    }

    public function getProduct_code($product_code) {
        return $this->price;
    }

    public function getAnimal($animal) {
        return $this->price;
    }
    
    // SETTERs (setta il valore)
    public function setName($name){
        $this->name = $name;
        return $this;
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

    public function setAnimal($animal) {
        $this->animal = $animal;
        return $this;
    }


    public function __construct($name, $price, $details, $product_code, $animal){
        $this->setName($name);
        $this->setPrice($price);
        $this->setDetails($details);
        $this->setProduct_code($product_code);
        $this->setAnimal($animal);
    }
}

$cane = new Product('cane', '1', 'a', 'a', 'cane');

var_dump($cane);

echo $cane


?>