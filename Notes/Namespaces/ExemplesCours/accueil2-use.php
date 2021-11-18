<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include "./vendor/autoload.php";

    use \Shop\Basket\Product as ProduitPanier; // use nous permet de ne pas devoir
                            // taper le nom du namespace complet 

    use \Shop\BasketFake\Product as ProductPanierFaux;

    $p1 = new ProduitPanier(4); // charge Produit de Basket (use plus haut)

    $pf1 = new ProductPanierFaux(5);

    // on pourrait faire un use aussi pour Basket
    // car le namespace est déjà spécifié dans la classe
    $b1 = new \Shop\Basket\Basket(5);


    ?>
</body>

</html>