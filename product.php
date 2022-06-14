<?php
  class product {
    public $brand;
    public $weight;
    public $price;

    function __construct($_brand, $_weight, $_price) {
      $this->brand = $_brand;
      $this->weight = $_weight;
      $this->price = $_price;
    }
    public function getInfo(){
      return "$this->brand <br> $this->weight <br> $this->price €";
    }
  }
?>