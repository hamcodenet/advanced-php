<?php 

class Product {
    protected $name; // public private - protected

    public function __construct($name) {
        $this->name = $name;
        var_dump("Object initiated...");
    }

    public function getName() {
        return $this->name;
    }
}

$laptop = new Product("Laptop");
// $laptop->name = "Laptop";
var_dump($laptop->getName());

$mobile = new Product("Mobile");
// $mobile->name = "Mobile";
var_dump($mobile->getName());