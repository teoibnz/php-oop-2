<?php 
    include_once __DIR__ . "./food.php";
    include_once __DIR__ . "./toys.php";
    include_once __DIR__ . "./dogKennel.php";
    class Prodotti {
        protected $price;
        protected $quantity;
        protected $discount;

    function __construct($price, $quantity, $discount){

        $this-> price = $price;
        $this-> quantity = $quantity;
        $this->discount = $discount;
    }
        public function setPrice(){
            return $this->price;
        }
        public function getQuantity(){
            return $this->quantity;
        }
        public function setDiscount(){
            return $this->discount;
        }
    }
?>