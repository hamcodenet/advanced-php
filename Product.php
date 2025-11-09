<?php 

class Product {
    protected $name; // public private - protected

    public function __construct($name) {
        $this->name = $name;
        // var_dump("Object initiated...");
    }

    public function getName() {
        return $this->name;
    }
}
