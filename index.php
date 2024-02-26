<?php 
require_once__DIR__.'/classes/Category.php';
require_once__DIR__.'/classes/Product.php';
require_once__DIR__.'/classes/Toy.php';
require_once__DIR__.'/classes/Food.php';
require_once__DIR__.'/classes/PetBed.php';

$dogs = new Category ('cani');
$cats = new Category ('gatti');

$products =[];

try {
    $product = new Product('prodotto','https://www.animalhouseitalia.it/15814-large_default/ferribiella-palla-fuxtreme-ultrasuoni-per-cani-taglia-media.jpg',5.50,$dogs);
}
catch($Exception $exception) {
    echo '<h2> Inserisci un numero</h2>';
}



$products[] = $product;


$ball = new Toy('Palla','https://www.animalhouseitalia.it/15814-large_default/ferribiella-palla-fuxtreme-ultrasuoni-per-cani-taglia-media.jpg',5.50,'plastica',$dogs);

$products[] = $ball;


$food = new Food('Cibo per cani','https://www.animalhouseitalia.it/15814-large_default/ferribiella-palla-fuxtreme-ultrasuoni-per-cani-taglia-media.jpg',5.50,'27/10/2037',$dogs);

$products[] = $food;



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>

    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>
                        Prodotti
                    </h1>
                </div>
                <?php
                    foreach ($products as $singleProduct){
                      ?> 
                         <div class="col-3">
                        <div class="card">
                            <img src="<?php echo $singleProduct->image; ?>" alt="">
                            <div class="card-body">
                                <h2>
                                    <?php echo $singleProduct->name;?>
                                </h2>
                                <ul>
                                    <li>
                                        Categoria: <?php echo $singleProduct->category->name; ?>
                                    </li>
                                    <li>
                                        € <?php echo $singleProduct->price; ?>
                                    </li>
                                    <?php
                                    if(get_class($singleProduct) == 'toy'){ ?>
                                    <li>
                                        Materiale: <?php echo $singleProduct->material; ?>
                                    </li>
                                    <?php
                                    }
                                    elseif (get_class($singleProduct) == 'food'){ ?>
                                    <li>
                                        Data di scadenza: <?php echo $singleProduct->expiration; ?>
                                    </li>
                                    <?php
                                    } ?>
                                </ul>
                            </div>
                        </div>
                        
                    </div>

                    <?php } ?>

                   
                
                </div>
                
            </div>
        </div>
    </main>

    <footer>

    </footer>
</body>
</html>