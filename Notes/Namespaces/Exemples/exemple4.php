<?php

include "./autoload.php";

// sans import.
// use Shop\Products\Product;
$product= new Shop\Products\Product("Oranges", 1.5); 

// si je n'utilise pas "use" je peux créer une autre classe portant le même nom
class Product {
	function __construct ($nom, $prix){
		echo "Nouvelle classe Product: ".$nom.",".$prix;
	}
	
}



?>



