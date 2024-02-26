<?php 
class Product {
    
   public $name;
   public $image;
   public $price;
   public $category;

   public function __construct($name,$image,$price,$category)
   {
    $this->name = $name;
    $this->image = $image;
    $this->price = $price;
    if(is_numeric($price)){
      $this->price = $price;
    }
    else{
      throw new Exception('enter a number');
    }
    $this->category = null;
   }
}


?>