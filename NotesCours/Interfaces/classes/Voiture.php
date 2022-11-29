<?php

class Voiture extends Vehicule implements IRoulant {
    public function __construct (string $modele, string $numImmatriculation) {
        parent::__construct ($modele, $numImmatriculation);
    }

    public function rouler(){
        echo "<br>Je roule comme une voiture";
    }

}