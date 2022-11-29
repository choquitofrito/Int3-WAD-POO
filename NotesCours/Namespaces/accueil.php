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
    // plus besoin!! include "./classes/Magasin/Achat/Produit.php";

    use Magasin\Achat\Produit as Produit;
    use Magasin\Externe\Produit as ProduitExt;
    
    // use ...
    // use ...
    // use ...

    $p1 = new Produit();
    $p2 = new ProduitExt();

    $c1 = new \Magasin\Achat\Commande();


    var_dump($p1);
    var_dump($p2);
    var_dump($c1);

    ?>
    
</body>
</html>