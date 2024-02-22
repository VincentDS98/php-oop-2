<?php 
require_once__DIR__.'/classes/Product.php';
class Toy extends Product {
    public $material;

    public function __construct($name,$image,$price,$material,$category)
   {
    $this->name = $name;
    $this->image = $image;
    $this->price = $price;
    $this->material = $material;
    $this->category = null;
    
   }
}