<?php 
require_once__DIR__.'/classes/Product.php';

class PetBed extends Product {
    public $width;
    public $height;


    public function __construct($name,$image,$price,$width,$height,$category)
   {
    $this->name = $name;
    $this->image = $image;
    $this->price = $price;
    $this->width = $width;
    $this->height = $height;
    $this->category = null;
   }
}