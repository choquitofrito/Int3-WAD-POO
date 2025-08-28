<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "./classes/Magasin/Produit.php";
    include "./classes/AutresClasses/Produit.php";

    use App\Entity\Magasin\Produit as ProduitMagasin;
    use AutresClasses\Produit as ProduitAutre;


    $prodMag = new ProduitMagasin();
    $prodAutre = new ProduitAutre();
    
    $prodMag->afficher();
    $prodAutre->afficher();


    ?>
</body>
</html>