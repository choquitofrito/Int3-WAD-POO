<?php

class Animal {
    protected string $nom;
    
    public function __construct (string $nom){
        $this->nom = $nom;        
    }

    public function manger (){
        print ("<br>" . $this->nom . " mange!");
    }

    public function getNom():string{
        return $this->nom;
    }

    public function setNom(string $nom):self {
        $this->nom = $nom;
        return $this;
    }
}