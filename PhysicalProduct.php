<?php 

class PhysicalProduct extends Product {
    protected $weight;

    public function setWeight($weight) {
        $this->weight = $weight;
    }
}