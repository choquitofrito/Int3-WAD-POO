<?php

abstract class Animal {
    protected string $nom;
    
    public function __construct (string $nom){
        $this->nom = $nom;        
    }

    // cette méthode DOIT être définie dans toutes
    // les classes qui héritent. Ici il y aura que la signature.
    public abstract function manger ();

    public function getNom():string{
        return $this->nom;
    }

    public function setNom(string $nom):self {
        $this->nom = $nom;
        return $this;
    }
}