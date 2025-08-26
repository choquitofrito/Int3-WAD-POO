<?php

abstract class Animal {

    public string $nom;
    public string $race;

    public function __construct (string $nom, string $race){
        $this->nom = $nom;
        $this->race = $race;
    }

    public function afficher():void{
        print ("<br>Je suis le " . $this->race . " " . $this->nom);
    }

    // cette méthode n'est pas implementée:
    // elle est abstraite
    abstract public function communiquer():void;


}