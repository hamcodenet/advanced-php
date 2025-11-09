<?php 

class EProduct extends Product {
    protected $link;

    public function setLink($link) {
        $this->link = $link;
    }   
}