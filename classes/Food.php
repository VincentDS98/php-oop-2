<?php 
require_once__DIR__.'/classes/Product.php';
class FOOD extends Product {
    public $expiration;

    public function __construct($name,$image,$price,$expiration,$category)
   {
    
    $this->name = $name;
    $this->image = $image;
    $this->price = $price;
    $this->expiration = $expiration;
    $this->category = null;
   }
}