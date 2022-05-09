<?php 
    include_once __DIR__ . "./product.php";

class Toys extends Prodotti{
    protected $toysName;
    protected $typeOfAnimal;
    protected $expiry;

    function __construct($toysName, $price, $quantity, $discount){
        parent ::__construct($price, $quantity, $discount);
        $this-> toysName = $toysName;
    }
    public function setToysName(){
        return $this->toysName;
    }
}

?>