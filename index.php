<?php 
require_once__DIR__.'/classes/Category.php';
require_once__DIR__.'/classes/PRODUCT.php';

$dogs = new Category ('cani');
$cats = new Category ('gatti');

$ball = new Product('Palla',null,5.50,$dogs);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>