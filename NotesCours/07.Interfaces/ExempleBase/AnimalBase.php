<?php


abstract class AnimalBase {
    public string $nom;
    public string $dateNaissance;
    
    // méthodes concretes
    public function direBonjour(){
        echo "<br>Je suis un " . get_class($this);
    }

    // méthodes abstraites
    abstract public function jouer();

}