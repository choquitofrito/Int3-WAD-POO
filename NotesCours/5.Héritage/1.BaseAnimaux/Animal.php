<?php

class Animal {
    public string $nom;
    
    public function __construct (string $nom){
        $this->nom = $nom;        
    }

    public function manger (){
        print ("<br>" . $this->nom . "mange!");
    }
}