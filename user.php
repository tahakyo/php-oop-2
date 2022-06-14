<?php
    class user {
      public $name;
      public $lastName;
      public $mail;
      public $cart = [];
      public $cc_expired = false;
      public $membership = false;
      public $discount = 0.2;

      function __construct($_name, $_lastName, $_mail, $_cc_expired, $_membership)
      {
        $this->name = $_name;
        $this->lastName = $_lastName;
        $this->mail = $_mail;
        $this->cc_expired = $_cc_expired;
        $this->membership = $_membership;
      }

      public function getUserInfo() {
        return "$this->name $this->lastName";
      }
      function addToCart($_product) {
        $this->cart[] = $_product;
      }
      // public function setDiscount() { 
      //   if ($this->membership = true) {
      //     $this->discount = 20;
      //   }else {
      //     $this->discount = 0;
      //   }

      // }
      function getTotalPrice() {
        $total_price = 0;
        if($this->membership = true) {
          foreach ($this->cart as $cartItem) {
            $total_price += $cartItem->price;
          }
          return $total_price - ($total_price * $this->discount);
        }else {
          return $total_price;
        }
      }
    }
?>