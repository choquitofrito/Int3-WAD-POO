<?php

namespace App\Entity\Magasin;

class Produit {
    private string $nom;

    public function afficher (){
        echo "<br>Je suis un produit du magasin";
    }

}