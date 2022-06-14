<?php
    class user {
      public $name;
      public $lastName;
      public $mail;
      public $cart = [];
      public $cc_expiry = false;
      public $membership = false;
      private $discount;

      function __construct($_name, $_lastName, $_mail)
      {
        $this->name = $_name;
        $this->lastName = $_lastName;
        $this->mail = $_mail;
      }
      function addToCart($_product) {
        $this->cart[] = $_product;
      }
    }
?>