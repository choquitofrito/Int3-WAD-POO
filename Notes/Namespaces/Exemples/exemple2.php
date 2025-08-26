<?php
// autoload
include "./autoload.php";


// import (mot clé "use")
use Shop\Products\Product;

// beaucoup plus simple: utilisation des classes qui se trouvent 
// dans le namespace Shop 
// sans devoir spécifier les éléments ("chemin")du namespace
$product= new Product("Oranges", 1.5); 


// On ne pourrait pas créer une classe Product ici car j'ai importé une classe 
// qui porte ce nom et il y aurait une collision de noms (testez!)
// On peut résoudre le problème en utilisant des alias (voir mainShopImportAlias.php)

// class Product {
	// function __construct ($nom, $prix){
		// echo "Nouvelle classe Product: ".$nom.",".$prix;
	// }
	
// }

?>



