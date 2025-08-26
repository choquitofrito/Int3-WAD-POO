<?php

include "./autoload.php";


// on importe avec un alias pour pouvoir créer ici une autre classe Product
use Shop\Products\Product as Produit;

// maintenant on a les classes Produit et Product
class Product {
	function __construct ($nom, $prix){
		echo "Nouvelle classe Product: ".$nom.",".$prix;
	}
	
}
// j'ai deux classes: 
// - la classe importée qui s'appelait Product et maintenant s'appele Produit
// - une nouvelle classe Product que j'ai créé dans ce fichier
$product= new Product("Oranges", 1.5); 
$product= new Produit("Poires", 1.5); 



?>



