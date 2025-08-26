<?php


// inclusion du fichier, méthode traditionnelle sans autoload
include "classes/Shop/Products/Product.php";

// $product= new Product("Ananas",2); // cette ligne ne fonctionnera plus car la classe Product se trouve maintenant dans un namespace

// utilisation des classes qui se trouvent dans le namespace Shop sans importation (use)
// on doit écrire le nom complet
$product= new \Shop\Products\Product("Oranges", 1.5); 





?>



