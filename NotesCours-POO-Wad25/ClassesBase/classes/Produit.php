<?php

class Produit {
    private string $nom;
    private float $prix;
    private int $stock;
    
    public function getNom():string {
        return $this->nom;
    }

    public function setNom(string $nouveauNom):void {
        $this->nom = $nouveauNom;
    }

    public function getPrix():float {
        return $this->prix;
    }

    public function setPrix(float $nouveauPrix):void {
        $this->prix = $nouveauPrix;
    }

    public function getStock():int {
        return $this->stock;
    }

    public function setStock(int $nouveauStock):void {
        $this->stock = $nouveauStock;
    }

    public function afficher():void {
        echo $this->nom;
    }

}
