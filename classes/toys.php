<?php 
    require_once __DIR__ . "/product.php";

class Toys extends Prodotti{
    protected $toysName;

    function __construct($toysName, $price, $quantity, $discount){
        parent ::__construct($price, $quantity, $discount);
        $this-> toysName = $toysName;
    }
    public function setToysName($toysName){
        return $this->toysName = $toysName;
    }
}

?>