<?php
namespace Shop\Products;


class Product {
    
        
	function __construct ($name,$price){
                        
			echo "<br/>Classe Product: ".$name.",".$price;
	}
}