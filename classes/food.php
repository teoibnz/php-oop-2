<?php 
    require_once __DIR__ . "/product.php";

class Food extends Prodotti{
    protected $FoodName;
    protected $typeOfAnimal;
    protected $FoodExpiry;

    function __construct($FoodName, $typeOfAnimal, $FoodExpiry, $price, $quantity, $discount){
        parent ::__construct($price, $quantity, $discount);
        $this-> FoodName = $FoodName;
        $this-> typeOfAnimal = $typeOfAnimal;
        $this-> FoodExpiry = $FoodExpiry;
    }
    public function setFoodProductName(){
        return $this->FoodName;
    }
    public function setTypeOfAnimal(){
        return $this->typeOfAnimal;
    }
    public function getFoodExpiry(){
        return $this->FoodExpiry;
    }
}
?>